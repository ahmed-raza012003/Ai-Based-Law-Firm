<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index() {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($request->all());
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function update(Request $request, Category $category) {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());
        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}
