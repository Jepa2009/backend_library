<?php

namespace App\Http\Controllers;

use App\Models\readers;
use Illuminate\Http\Request;
use App\Http\Resources\readersResource;

class ReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers =ReadersResource::collection(Readers::all());
        return $readers;
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
    public function show(readers $readers)
    {
        $created_catalog = new Readers;
        $created_catalog->name = $request->name;
        $created_catalog->address = $request->address;
        $created_catalog->number = $request->number;
        $created_catalog->save();
        return $created_catalog;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(readers $readers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, readers $readers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(readers $readers)
    {
        Readers::destroy($id);
        return true;
    }
}
