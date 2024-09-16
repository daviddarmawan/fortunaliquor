<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;

class SalesogiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langganan = Langganan::where('nama_sales', 'Ogi')->latest()->get();
        return view('salesogi.index', ['langganan' => $langganan]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
