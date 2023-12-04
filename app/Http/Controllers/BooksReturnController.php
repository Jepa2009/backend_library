<?php

namespace App\Http\Controllers;

use App\Models\books_return;
use Illuminate\Http\Request;
use App\Http\Resources\books_returnResource;

class booksReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books_retu =books_returnResource::collection(books_return::all());
        return $books_retu;
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
        $created_catalog = new BooksReturn;
        $created_catalog->name = $request->name;
        $created_catalog->reader_id = $request->reader_id;
        $created_catalog->address = $request->address;
        $created_catalog->number = $request->number;
        $created_catalog->books_table_two_id = $request->books_table_two_id;
        $created_catalog->save();
        return $created_catalog;
    }

    /**
     * Display the specified resource.
     */
    public function show(books_return $books_return)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(books_return $books_return)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, books_return $books_return)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books_return $books_return)
    {
        BooksReturn::destroy($id);
        return true;
    }
}
