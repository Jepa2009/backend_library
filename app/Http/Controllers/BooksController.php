<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Resources\booksResource;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books =booksResource::collection(books::all());
        return $books;
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
        $created_book = new Books;
        $created_book->name = $request->name;
        $created_book->autor_id = $request->autor_id;
        $created_book->genre_id = $request->genre_id;
        $created_book->save();
        return $created_book;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Books::find($id);
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        $book = Books::find($request->id);
        $book->name = $request->name;
        $book->autor_id = $request->autor_id;
        $book->genre_id = $request->genre_id;
        $book->save();
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        Books::destroy($id);
        return true;
    }
}
