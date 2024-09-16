<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::where('sisa_tagihan', '!=' , 0)->where('status', '2')->orWhereNull('sisa_tagihan')->get();
        return view('laporanpiutangpelanggan.index', ['order' => $order]);
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

     public function edit($id)
     {
         $order = Order::find($id);
         if (!$order)
             return redirect()->route('laporanpiutangpelanggan.index')
                 ->with('error_message', 'Order dengan id' . $id . ' tidak ditemukan');
 
         return view('pembayaran.edit', [
             'order' => $order
         ]);
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pembayaran' => 'required',
        ]);

        $order = Order::find($id);
        $order->pembayaran = $request->pembayaran;
        $order->sisa_tagihan = $order->sisa_tagihan-$request->pembayaran;
        $order->save();

        return redirect()->route('laporanpiutangpelanggan.index')
            ->with('success_message', 'Berhasil Melakukan Pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
