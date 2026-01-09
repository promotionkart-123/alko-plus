<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $subcategories = SubCategory::get();
        return view('products', compact('categories', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($subCategoryId)
    {

        $subcategory = SubCategory::findOrFail($subCategoryId);
        $products = Products::where('category_id', $subCategoryId)->get();
        return view('subProducts', compact('subcategory', 'products'));
    }


    public function showDetails($id)
    {
        // $subcategory = SubCategory::find($id);
        $product = Products::find($id);
        return view('productDetails', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
