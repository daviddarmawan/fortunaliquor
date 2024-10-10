<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;
use App\Models\Orderdetail;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DB::table('orders as o')
        ->select('o.langganan_id', DB::raw('MAX(o.tanggal_pengiriman) AS tanggal_pengiriman'), 'l.nama_sales')
        ->join('langganans as l', 'o.langganan_id', '=', 'l.nama_pelanggan')
        ->groupBy('o.langganan_id', 'l.nama_sales')
        ->having(DB::raw('MAX(o.tanggal_pengiriman)'), '<', now()->subDays(30))
        ->orderBy('l.nama_sales', 'ASC')
        ->get();

        return view('belumtrx', [
            'orders' => $orders
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
