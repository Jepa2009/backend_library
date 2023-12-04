<?php

namespace App\Http\Controllers;

use App\Models\autors;
use Illuminate\Http\Request;
use App\Http\Resources\autorsResource;

class AutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aut =autorsResource::collection(autors::all());
        return $aut;
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
        $created_catalog = new Autors;
        $created_catalog->name = $request->name;
        $created_catalog->save();
        return $created_catalog;

    }

    /**
     * Display the specified resource.
     */
    public function show(autors $autors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autors $autors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, autors $autors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Autor::destroy($id);
        return true;
    }
}
