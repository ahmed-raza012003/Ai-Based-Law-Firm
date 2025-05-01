<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Chat;
use App\Models\Lawyer;
use App\Models\Category;

class ChatBotController extends Controller
{
    public function getPreviousChats()
    {
        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $chats = Chat::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(20)->get();
        return response()->json($chats);
    }

    public function sendMessage(Request $request)
    {
        $message = trim($request->input('message'));
        $user = auth()->user();
        $user_id = $user ? $user->id : 'guest_' . uniqid();

        if (empty($message)) {
            return response()->json(['message' => 'Please enter a message.'], 400);
        }

        try {
            // Get conversation state from session
            $conversation = $request->session()->get('chat_conversation', []);

            // Path to Python script
            $pythonScriptPath = base_path('python/legal_assistant_conversational.py');
            $pythonBin = 'python'; // Use 'python3' if needed
            $csvPath = base_path('python/laws.csv');

            // Ensure files exist
            if (!file_exists($pythonScriptPath) || !file_exists($csvPath)) {
                Log::error('Python script or CSV not found', [
                    'script' => $pythonScriptPath,
                    'csv' => $csvPath
                ]);
                return response()->json(['message' => 'System error: Configuration missing.'], 500);
            }

            // Escape inputs
            $escapedMessage = escapeshellarg($message);
            $escapedConversation = escapeshellarg(json_encode($conversation));

            // Run Python script
            $command = "$pythonBin $pythonScriptPath $escapedMessage $escapedConversation 2>&1";
            $output = [];
            $returnVar = 0;
            exec($command, $output, $returnVar);

            if ($returnVar !== 0) {
                Log::error('Python script execution failed', [
                    'command' => $command,
                    'output' => $output,
                    'returnVar' => $returnVar
                ]);
                return response()->json(['message' => 'Error processing request. Please try again.'], 500);
            }

            // Parse output
            $rawOutput = implode("\n", $output);
            $responseData = json_decode($rawOutput, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid JSON from Python script', ['output' => $rawOutput]);
                return response()->json(['message' => 'Error parsing response. Please try again.'], 500);
            }

            // Update conversation state
            $conversation = $responseData['conversation'] ?? [];
            $request->session()->put('chat_conversation', $conversation);

            // Handle response
            if (isset($responseData['question'])) {
                // Bot is asking a question
                $botMessage = $responseData['question'];
                if ($user) {
                    $this->storeChat($message, $botMessage);
                }
                return response()->json([
                    'message' => $botMessage,
                    'laws' => [],
                    'lawyers' => [],
                    'user_id' => $user_id
                ]);
            }

            // Bot found laws
            $laws = $responseData['laws'] ?? [];
            $botMessage = $this->formatBotMessage($laws);

            // Fetch lawyers
            $lawyers = [];
            if (!empty($laws)) {
                $category = $laws[0]['Category'] ?? 'Criminal Laws';
                $city = $this->extractCityFromMessage($message);
                $lawyers = $this->getLawyersFromDatabase($category, $city);
            }

            // Store chat
            if ($user) {
                $this->storeChat($message, $botMessage);
            }

            // Clear conversation if laws are returned
            $request->session()->forget('chat_conversation');

            return response()->json([
                'message' => $botMessage,
                'laws' => $laws,
                'lawyers' => $lawyers,
                'user_id' => $user_id
            ]);

        } catch (\Exception $e) {
            Log::error('Chatbot error', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Error: Please try again.'], 500);
        }
    }

    private function formatBotMessage($laws)
    {
        if (empty($laws)) {
            return "I couldn’t find specific laws. Please provide more details or try again.";
        }

        $lawsText = "Based on your situation, here are the most relevant laws:\n";
        foreach ($laws as $law) {
            $lawsText .= "- {$law['Name']} (Section {$law['Code']}): {$law['Punishments']} (Applies when: {$law['Applicable when']})\n";
        }
        $lawsText .= "\n⚠️ I’m an AI, not a lawyer. Please consult a professional for legal advice.";
        return $lawsText;
    }

    private function getLawyersFromDatabase($category, $city = null)
    {
        try {
            $query = Lawyer::join('users', 'lawyers.user_id', '=', 'users.id')
                ->join('lawyer_has_categories', 'lawyers.id', '=', 'lawyer_has_categories.lawyer_id')
                ->where('lawyers.status', 'available')
                ->select('lawyers.id', 'users.name', 'lawyers.address', 'lawyers.city', 'users.email', 'users.phone');

            $categoryId = Category::where('name', $category)->first();
            if ($categoryId) {
                $query->where('lawyer_has_categories.category_id', $categoryId->id);
            }
            if ($city) {
                $query->where('lawyers.city', 'like', "%{$city}%");
            }

            $lawyers = $query->get();
            return $lawyers->map(function ($lawyer) {
                return [
                    'name' => $lawyer->name,
                    'specialization' => $lawyer->category_name ?? 'General',
                    'experience' => 5, // Placeholder
                    'rating' => 4.5, // Placeholder
                    'location' => "{$lawyer->city}, {$lawyer->address}",
                    'contact' => $lawyer->phone ?? 'Not provided',
                    'languages' => ['English', 'Urdu'] // Placeholder
                ];
            })->toArray();
        } catch (\Exception $e) {
            Log::error('Database lawyer search error', ['error' => $e->getMessage()]);
            return [];
        }
    }

    private function extractCityFromMessage($message)
    {
        $cities = ['Lahore', 'Karachi', 'Islamabad', 'Peshawar', 'Quetta'];
        $message = strtolower($message);
        foreach ($cities as $city) {
            if (stripos($message, strtolower($city)) !== false) {
                return $city;
            }
        }
        return null;
    }

    public function storeChat($message, $botResponse)
    {
        if (!auth()->check()) {
            return;
        }
        try {
            Chat::create([
                'user_id' => auth()->id(),
                'message' => $message,
                'bot_response' => $botResponse,
            ]);
        } catch (\Exception $e) {
            Log::error('Error saving chat', ['exception' => $e->getMessage()]);
        }
    }
}