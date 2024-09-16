<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class KirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::where('status', '1')->latest()->get();
        return view('kiriman.index', ['order' => $order]);
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
        
        $order = Order::where('id', $id)->where('status', 1)->first();
        $order_details = OrderDetail::where('pesanan_id', $order->id)->get();

        return view('kiriman.info', compact('order', 'order_details'));

        }

    public function invoice($id)
    {
                
        $order = Order::where('id', $id)->first();
        $order_details = OrderDetail::where('pesanan_id', $order->id)->get();
        
        return view('kiriman.invoice', compact('order', 'order_details'));
        
        }

        public function invoice2($id)
        {
                    
            $order = Order::where('id', $id)->first();
            $order_details = OrderDetail::where('pesanan_id', $order->id)->get();
            
            return view('kiriman.invoice2', compact('order', 'order_details'));
            
            }

        public function surat_jalan($id)
        {
                    
            $order = Order::where('id', $id)->first();
            $order_details = OrderDetail::where('pesanan_id', $order->id)->get();
            
            return view('kiriman.surat_jalan', compact('order', 'order_details'));
            
            }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::find($id);
        if (!$order)
            return redirect()->route('kiriman.index')
                ->with('error_message', 'Order dengan id' . $id . ' tidak ditemukan');

        return view('kiriman.edit', [
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
    
    return redirect()->route('kiriman.index')
        ->with('success_message', 'Berhasil mengubah Tanggal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function konfirmasiterkirim($pesanan_id)
    {
        $order = Order::where('id', $pesanan_id)->where('status', 1)->first();
        $order->status = 2;
        $order->status_margin = 1;
        $order->update();

        return redirect()->route('kiriman.index');
    }

    public function konfirmasibelumcheckout($pesanan_id)
    {
        $order = Order::where('id', $pesanan_id)->where('status', 1)->first();
        $order->status = 0;
        $order->update();

        return redirect()->route('kiriman.index');
    }

    public function konfirmasibatalan($pesanan_id)
    {
        $order = Order::where('id', $pesanan_id)->where('status', 1)->first();
        $order->status = 3  ;
        $order->status_margin = 4  ;
        $order->update();

        return redirect()->route('kiriman.index');
    }

    public function konfirmasibelumterkirim($pesanan_id)
    {
        $order = Order::where('id', $pesanan_id)->where('status', 2)->first();
        $order->status = 1  ;
        $order->status_margin = 3  ;
        $order->update();

        return redirect()->route('kiriman.index');
    }
}
