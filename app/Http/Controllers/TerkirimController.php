<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class TerkirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::where('status', '2')->latest()->get();
        return view('terkirim.index', ['order' => $order]);
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
        
        $order = Order::where('id', $id)->where('status', 2)->first();
        $order_details = OrderDetail::where('pesanan_id', $order->id)->get();

        return view('terkirim.info', compact('order', 'order_details'));

        }

        public function show_margin($id)
        {
            
            $order = Order::where('id', $id)->first();
            $order_details = OrderDetail::where('pesanan_id', $order->id)->get();
    
            return view('terkirim.margin', compact('order', 'order_details'));
    
            }

        public function show_margin_sales($id)
        {
                
            $order = Order::where('id', $id)->first();
            $order_details = OrderDetail::where('pesanan_id', $order->id)->get();
        
            return view('terkirim.margin_sales', compact('order', 'order_details'));
        
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
