<?php

namespace App\Http\Controllers;

use App\Models\Unit_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UnitListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit_list::all();
        return view('admin.unit.index', ['unit_items'=>$units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $units = new Unit_list();
        $units->name = $request->name;
        $units->short_name = $request->name;

        $units->save();
        return redirect()->route('unit-list.index')->with('success', 'Unit Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit_list $unit_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit_list $unit_list)
    {
        return view('admin.unit.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit_list $unit_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit_list $unit_list)
    {
        //
    }
}
