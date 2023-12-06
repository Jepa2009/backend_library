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
        $created_readerTi = new ReadersTicket;
        $created_readerTi->reader_id = $request->reader_id;
        $created_readerTi->address = $request->address;
        $created_readerTi->number = $request->number;
        $created_readerTi->books_tabl_id = $request->books_tabl_id;
        $created_readerTi->save();
        return $created_readerTi;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reader_Ti = ReadersTicket::find($id);
        return $reader_Ti;
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
        $reader_ti = readers_ticket::find($request->id);
        $reader_ti->reader_id = $request->reader_id;
        $reader_ti->address = $request->address;
        $reader_ti->number = $request->number;
        $reader_ti->books_tabl_id = $request->books_tabl_id;
        $reader_ti->save();
        return $reader_ti;
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
