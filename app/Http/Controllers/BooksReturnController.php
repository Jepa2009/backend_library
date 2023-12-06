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
        $created_bookRe = new BooksReturn;
        $created_bookRe->name = $request->name;
        $created_bookRe->reader_id = $request->reader_id;
        $created_bookRe->address = $request->address;
        $created_bookRe->number = $request->number;
        $created_bookRe->books_table_two_id = $request->books_table_two_id;
        $created_bookRe->save();
        return $created_bookRe;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $booksreturn = books_return::find($id);
        return $booksreturn;
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
        $book_re = books_return::find($request->id);
        $book_re->name = $request->name;
        $book_re->reader_id = $request->reader_id;
        $book_re->address = $request->address;
        $book_re->number = $request->number;
        $book_re->save();
        return $book_re;
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
