<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
{
    $categories = Category::all();
    $lawyers = Lawyer::with('user', 'categories')->latest()->get();
    return view('lawyers.index', compact('lawyers', 'categories'));
}


    public function create()
    {
        $users = User::whereNotIn('id', Lawyer::pluck('user_id'))->get();
        $categories = Category::all();
        return view('lawyers.create', compact('users', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'address' => 'required',
            'city' => 'required',
            'status' => 'required|in:available,busy',
            'categories' => 'nullable|array'
        ]);

        $lawyer = Lawyer::create($request->only('user_id', 'address', 'city', 'status'));
        $lawyer->categories()->sync($request->categories);

        return redirect()->route('lawyers.index')->with('success', 'Lawyer created successfully.');
    }

    public function edit(Lawyer $lawyer)
    {
        $users = User::all();
        $categories = Category::all();
        return view('lawyers.edit', compact('lawyer', 'users', 'categories'));
    }

    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'address' => 'required',
            'city' => 'required',
            'status' => 'required|in:available,busy',
            'categories' => 'nullable|array'
        ]);

        $lawyer->update($request->only('address', 'city', 'status'));
        $lawyer->categories()->sync($request->categories);

        return redirect()->route('lawyers.index')->with('success', 'Lawyer updated successfully.');
    }

    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();
        return redirect()->route('lawyers.index')->with('success', 'Lawyer deleted successfully.');
    }
}
