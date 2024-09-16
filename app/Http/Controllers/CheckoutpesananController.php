<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class CheckoutpesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::where('status', '0')->latest()->get();
        return view('checkoutpesanan.index', ['order' => $order]);
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
    public function show($id)
    {
        
        $order = Order::where('id', $id)->where('status', 0)->first();
        $order_details = OrderDetail::where('pesanan_id', $order->id)->get();

        return view('checkoutpesanan.info', compact('order', 'order_details'));

        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::find($id);
        if (!$order)
            return redirect()->route('checkoutpesanan.index')
                ->with('error_message', 'Order dengan id' . $id . ' tidak ditemukan');

        return view('checkoutpesanan.edit', [
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->tanggal_pengiriman = $request->tanggal_pengiriman;
        $order->tanggal_jatuh_tempo = $request->tanggal_jatuh_tempo;
        $order->save();
    
    return redirect()->route('checkoutpesanan.index')
        ->with('success_message', 'Berhasil mengubah Tanggal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
