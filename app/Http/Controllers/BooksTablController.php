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
        $created_bookTa = new BooksTabl;
        $created_bookTa->name = $request->name;
        $created_bookTa->received_books_id = $request->received_books_id;
        $created_bookTa->autor_id = $request->autor_id;
        $created_bookTa->save();
        return $created_bookTa;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book_Ta = BooksTabl::find($id);
        return $book_Ta;
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
        $book_ta = books_tabl::find($request->id);
        $book_ta->received_books_id = $request->received_books_id;
        $book_ta->autor_id = $request->autor_id;
        $book_ta->genre_id = $request->genre_id;
        $book_ta->save();
        return $book_ta;
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
