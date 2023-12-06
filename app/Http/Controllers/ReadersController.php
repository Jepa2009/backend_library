<?php

namespace App\Http\Controllers;

use App\Models\readers;
use Illuminate\Http\Request;
use App\Http\Resources\readersResource;

class ReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers =ReadersResource::collection(Readers::all());
        return $readers;
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
        $created_reader = new Readers;
        $created_reader->name = $request->name;
        $created_reader->address = $request->address;
        $created_reader->number = $request->number;
        $created_reader->save();
        return $created_reader;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $read = Readers::find($id);
        return $read;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(readers $readers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, readers $readers)
    {
        $reader = readers::find($request->id);
        $reader->name = $request->name;
        $reader->address = $request->address;
        $reader->number = $request->number;
        $reader->save();
        return $reader;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(readers $readers)
    {
        Readers::destroy($id);
        return true;
    }
}
