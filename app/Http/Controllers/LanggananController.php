<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;

class LanggananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langganan = Langganan::all();
        return view('langganan.index', ['langganan' => $langganan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('langganan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nama_sales' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'lokasi' => 'required',
            'titik' => 'required',
        ]);
        $array = $request->only([
            'nama_pelanggan', 'nama_sales', 'no_hp', 'alamat', 'lokasi', 'titik'
        ]);
        Langganan::create($array);
        return redirect()->route('langganan.index')
            ->with('success_message', 'Berhasil menambah Langganan Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $langganan = Langganan::findOrFail($id);
        if (!$langganan) return redirect()->route('langganan.index')
        ->with('error_message', 'Langganan dengan id'.$id.' tidak ditemukan');

        return view('langganan.info', compact('langganan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $langganan = Langganan::find($id);
        if (!$langganan) return redirect()->route('langganan.index')
            ->with('error_message', 'Langganan dengan id '.$id.' tidak ditemukan');
        return view('langganan.edit', [
            'langganan' => $langganan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $langganan = Langganan::find($id);
        $langganan->nama_pelanggan = $request->nama_pelanggan;
        $langganan->nama_sales = $request->nama_sales;
        $langganan->no_hp = $request->no_hp;
        $langganan->alamat = $request->alamat;
        $langganan->lokasi = $request->lokasi;
        $langganan->titik = $request->titik;
        $langganan->save();
    
    return redirect()->route('langganan.index')
        ->with('success_message', 'Berhasil mengubah Langganan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $langganan = Langganan::find($id);
        if ($langganan) $langganan->delete();
    
        return redirect()->route('langganan.index')
            ->with('success_message', 'Berhasil menghapus Langganan');
    }
}
