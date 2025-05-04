<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\User; // Use User model for clients
use App\Models\Lawyer;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    // Show the form to create a new case
    public function create()
    {
        $clients = User::role('client')->get(); // Fetch users with 'client' role
        $lawyers = Lawyer::all();
        return view('cases.create', compact('clients', 'lawyers'));
    }

    // Store a new case
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:users,id|role:client', // Ensure client is a user with 'client' role
            'lawyer_id' => 'required|exists:lawyers,id',
            'section_code' => 'required|string',
            'status' => 'required|in:open,closed',
            'stage' => 'required|in:filed,investigation,trial,verdict,appeal,closed',
        ]);

        Cases::create($request->all());

        return redirect()->route('cases.index')->with('success', 'Case created successfully!');
    }

    // Display all cases
    public function index()
    {
        $cases = Cases::all();
        return view('cases.index', compact('cases'));
    }

    // Show the form to edit an existing case
    public function edit(Cases $case)
    {
        $clients = User::role('client')->get();
        $lawyers = Lawyer::all();
        return view('cases.edit', compact('case', 'clients', 'lawyers'));
    }

    // Update the case details
    public function update(Request $request, Cases $case)
    {
        $request->validate([
            'client_id' => 'required|exists:users,id|role:client',
            'lawyer_id' => 'required|exists:lawyers,id',
            'section_code' => 'required|string',
            'status' => 'required|in:open,closed',
            'stage' => 'required|in:filed,investigation,trial,verdict,appeal,closed',
        ]);

        $case->update($request->all());

        return redirect()->route('cases.index')->with('success', 'Case updated successfully!');
    }

    // Delete the case
    public function destroy(Cases $case)
    {
        $case->delete();
        return redirect()->route('cases.index')->with('success', 'Case deleted successfully!');
    }
}
