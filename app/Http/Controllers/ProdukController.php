<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'integer',
        ]);
        $array = $request->only([
            'kode', 'nama', 'harga'
        ]);
        Produk::create($array);
        return redirect()->route('produk.index')
            ->with('success_message', 'Berhasil menambah Produk Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        if (!$produk) return redirect()->route('produk.index')
        ->with('error_message', 'Produk dengan id'.$id.' tidak ditemukan');

        return view('produk.info', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        if (!$produk) return redirect()->route('produk.index')
            ->with('error_message', 'Produk dengan id '.$id.' tidak ditemukan');
        return view('produk.edit', [
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->save();
    
    return redirect()->route('produk.index')
        ->with('success_message', 'Berhasil mengubah Produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($produk) $produk->delete();
    
        return redirect()->route('produk.index')
            ->with('success_message', 'Berhasil menghapus Peraturan');
    }
}
