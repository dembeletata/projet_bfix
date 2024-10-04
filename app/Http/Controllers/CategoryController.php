<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.service');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->service = $request->service;
        $category->save();

        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
    }
}
