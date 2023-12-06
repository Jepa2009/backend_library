<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;
use App\Http\Resources\genreResource;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre =GenreResource::collection(Genre::all());
        return $genre;
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
        $created_genr = new Genre;
        $created_genr->name = $request->name;
        $created_genr->save();
        return $created_genr;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gen = Genre::find($id);
        return $gen;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, genre $genre)
    {
        $genr = genre::find($request->id);
        $genr->name = $request->name;
        $genr->save();
        return $genr;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        Genre::destroy($id);
        return true;
    }
}
