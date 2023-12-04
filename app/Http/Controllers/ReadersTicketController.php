<?php

namespace App\Http\Controllers;

use App\Models\readers_ticket;
use Illuminate\Http\Request;
use App\Http\Resources\readers_ticketResource;

class ReadersTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers_ticke =readers_ticketResource::collection(readers_ticket::all());
        return $readers_ticke;
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
    public function show(readers_ticket $readers_ticket)
    {
        $created_catalog = new ReadersTicket;
        $created_catalog->reader_id = $request->reader_id;
        $created_catalog->address = $request->address;
        $created_catalog->number = $request->number;
        $created_catalog->books_tabl_id = $request->books_tabl_id;
        $created_catalog->save();
        return $created_catalog;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(readers_ticket $readers_ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, readers_ticket $readers_ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(readers_ticket $readers_ticket)
    {
        ReadersTicket::destroy($id);
        return true;
    }
}
