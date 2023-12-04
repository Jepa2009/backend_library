<?php

namespace App\Http\Controllers;

use App\Models\books_tabl;
use Illuminate\Http\Request;
use App\Http\Resources\books_tablResource;

class BooksTablController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books_tab =books_tablResource::collection(books_tabl::all());
        return $books_tab;
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
        $created_catalog = new BooksTabl;
        $created_catalog->name = $request->name;
        $created_catalog->received_books_id = $request->received_books_id;
        $created_catalog->autor_id = $request->autor_id;
        $created_catalog->save();
        return $created_catalog;
    }

    /**
     * Display the specified resource.
     */
    public function show(books_tabl $books_tabl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(books_tabl $books_tabl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, books_tabl $books_tabl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books_tabl $books_tabl)
    {
        BooksTabl::destroy($id);
        return true;
    }
}
