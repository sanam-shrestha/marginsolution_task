<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     
    public function store(RequestCategory $request)
    {
        $validatedData = $request->validated();
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $ca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestCategory $request, Category $category)
    {
        $validated = $request->validated();
        $category->update($validated);
        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
 
    public function delete(string $id)
    {
        $category = Category::find($id);
     
        if ($category && $category->events->count()  == 0 ) {
            $category->delete();
            session()->flash('success', 'Category deleted successfully!');
        } else {
            session()->flash('error', 'Category cannot delete.');
        }
        return redirect()->route('categories.index');
    }
    
}
