<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($nama_pelanggan = '') { // = '' optional
        if($nama_pelanggan){
            $langganan = Langganan::where('nama_pelanggan', $nama_pelanggan)->first();
            if($langganan){
                $keranjang = Keranjang::where('kode_pelanggan', $nama_pelanggan)->get();
                return view('keranjang.index')->with('nama_pelanggan', $langganan->nama_pelanggan)->with('keranjang', $keranjang);
            }
            else{
                return abort(403, 'Tidak Ada');
                }
            }
            else{
                return abort(403, 'Tidak Ada');
                }
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::select('nama')->get();
        $pelanggan = Langganan::select('nama_pelanggan')->get();

        return view('keranjang.create', compact('produk', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pelanggan' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'integer',
            'margin' => 'integer',
            'margin_sales' => 'integer',
        ]);
        $array = $request->only([
            'kode_pelanggan', 'nama_produk', 'harga_produk', 'margin', 'margin_sales',
        ]);
        Keranjang::create($array);
        return redirect()->route('langganan.index')
            ->with('success_message', 'Berhasil menambah Produk Keranjang Baru');
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
    public function edit($id)
    {
        $keranjang = Keranjang::find($id);
        if (!$keranjang) return redirect()->route('langganan.index')
            ->with('error_message', 'Kelompok Produk dengan id '.$id.' tidak ditemukan');
        return view('keranjang.edit', [
            'keranjang' => $keranjang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->harga_produk = $request->harga_produk;
        $keranjang->margin = $request->margin;
        $keranjang->margin_sales = $request->margin_sales;
        $keranjang->save();
    
    return redirect()->route('langganan.index')
        ->with('success_message', 'Berhasil mengubah Kelompok Produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $keranjang = Keranjang::find($id);
        if ($keranjang) $keranjang->delete();
    
        return redirect()->route('langganan.index')
            ->with('success_message', 'Berhasil menghapus kelompok produk');
    }
}
