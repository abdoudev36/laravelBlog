<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
	 *@ create category
	 */
	public function create(Request $request)
	{
	    $request->validate([
	    	'category' => 'required|string|unique:categories,category',
	    ]);

	    $cat = new Category();
	    $cat->category = $request->category;
	    $cat->save();

    	return redirect()->route('cpanel-categories')->withSuccess('category created successfully ...');
	}

	/*
    *@ update category page
    */
    public function updatePage($id)
    {
    	$cat = Category::findOrFail($id);
    	return view('cpanel.pages.updateCategory', compact('cat'));
    }

    /*
    *@ update category
    */
    public function update(Request $request, $id)
    {
    	$cat = Category::findOrFail($id);

    	$request->validate([
	    	'category' => 'required|string|unique:categories,category,'.$cat->id.',id'
	    ]);

    	$cat->category = $request->category;

    	$cat->update(['id' => $id]);

    	return redirect()->route('cpanel-categories')->withSuccess('category updated successfully ...');
    }

    /*
    *@ delete category
    */
    public function destroy(Request $request, $id)
    {
    	$cat = Category::findOrFail($id);
    	$cat->delete();
    	return redirect()->route('cpanel-categories')->withSuccess('category deleted successfully ...');
    }
}