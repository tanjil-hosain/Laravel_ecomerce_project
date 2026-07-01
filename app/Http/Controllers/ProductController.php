<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->buying_price = $request->buying_price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->unit_id = $request->unit_id;

        //image---
        $rand_number = rand(1,20);
        $ext_lower = strtolower($request->image->extension());
        $file_name = $rand_number . time().".".$ext_lower;
        $request->image->move(public_path('images'), $file_name);
        $product->image = 'images/'. $file_name;
        $product->save();
        return redirect()->route('products.index')->with('succes', 'Product Succesfully Created');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
