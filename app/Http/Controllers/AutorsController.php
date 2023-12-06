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
        $created_autor = new Autors;
        $created_autor->name = $request->name;
        $created_autor->save();
        return $created_autor;

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $autor = Autors::find($id);
        return $autor;
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
    public function update(Request $request, Autors $autors)
    {
        $autor = Autors::find($request->id);
        $autor->name = $request->name;
        $autor->save();
        return $autor;
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
