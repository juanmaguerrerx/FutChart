<?php

namespace App\Http\Controllers;

use App\Models\Pistas;
use Illuminate\Http\Request;

class PistasCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return json_encode(Pistas::all());
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
    public function show(Pistas $pistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pistas $pistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pistas $pistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pistas $pistas)
    {
        //
    }
}
