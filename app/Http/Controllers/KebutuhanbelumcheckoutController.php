<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;
use App\Models\Orderdetail;

class KebutuhanbelumcheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_details = DB::table('order_details')
        ->select('keranjangs.nama_produk', DB::raw('SUM(order_details.jumlah) as total_jumlah'))
        ->join('keranjangs', 'keranjangs.id', '=', 'order_details.barang_id')
        ->join('orders', 'orders.id', '=', 'order_details.pesanan_id')
        ->where('orders.status', '=', 0)
        ->groupBy('keranjangs.nama_produk')
        ->orderByRaw('SUM(order_details.jumlah)DESC')
        ->get();

        return view('kebutuhan.index', [
            'order_details' => $order_details
        ]);

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
