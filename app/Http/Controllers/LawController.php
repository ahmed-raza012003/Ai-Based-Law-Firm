<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Law;
use Illuminate\Http\Request;

class LawController extends Controller
{
    public function index()
    {
        // Get all categories
        $categories = Category::all();

        return view('laws.index', compact('categories'));
    }

    public function getLawsByCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
        ]);

        // Get laws based on selected category
        $laws = Law::where('category_id', $request->category_id)
                   ->where('name', 'like', '%' . $request->search . '%') // Optional: For search
                   ->get();

        return response()->json($laws);
    }
}
