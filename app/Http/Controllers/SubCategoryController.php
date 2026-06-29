<?php

namespace App\Http\Controllers;

use App\Models\Sub_category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_cats= Sub_category::all();
        return view('admin.sub_category.index',['sub_items'=>$sub_cats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sub_cats = new Sub_category();
        $sub_cats->name = $request->name;

        $sub_cats->save();
        return redirect()->route('sub_category.index')->with('success', 'Suv_category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sub_category $sub_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sub_category $sub_category)
    {
        return view('admin.sub_category.edit',['sub_item'=>$sub_category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sub_category $sub_category)
    {
        $sub_category->name= $request->name;
        $sub_category->update();
         return redirect()->route('sub_category.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sub_category $sub_category)
    {
        $sub_category->delete();
        return redirect()->route('sub_category.index')->with('success', 'Successfully Deleted');
    }
}
