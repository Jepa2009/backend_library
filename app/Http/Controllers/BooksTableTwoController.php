<?php

namespace App\Http\Controllers;

use App\Models\books_table_two;
use Illuminate\Http\Request;
use App\Http\Resources\books_table_twoResource;

class BooksTableTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books_table_tw =books_table_twoResource::collection(books_table_two::all());
        return $books_table_tw;
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
        $created_bookTw = new BooksTableTwo;
        $created_bookTw->name = $request->name;
        $created_bookTw->autor_id = $request->autor_id;
        $created_bookTw->genre_id = $request->genre_id;
        $created_bookTw->save();
        return $created_bookTw;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book_Tw = BooksTableTwo::find($id);
        return $book_Tw;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(books_table_two $books_table_two)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, books_table_two $books_table_two)
    {
        $book_tw = books_table_two::find($request->id);
        $book_tw->name = $request->name;
        $book_tw->autor_id = $request->autor_id;
        $book_tw->genre_id = $request->genre_id;
        $book_tw->save();
        return $book_tw;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books_table_two $books_table_two)
    {
        BooksTableTwo::destroy($id);
        return true;
    }
}
