<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($nama_pelanggan = '') { // = '' optional
        if($nama_pelanggan){
            $langganan = Langganan::where('nama_pelanggan', $nama_pelanggan)->first();
            if($langganan){
                $keranjang = Keranjang::where('kode_pelanggan', $nama_pelanggan)->get();
                return view('order.index')->with('nama_pelanggan', $langganan->nama_pelanggan)->with('keranjang', $keranjang);
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
        return view('order.edit', [
            'keranjang' => $keranjang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keranjang = Keranjang::where('id', $id)->first();

        //cek validasi
        $cek_order = Order::where('langganan_id', $keranjang->kode_pelanggan)->where('status', 0)->first();

        //simpan ke database order
        if(empty( $cek_order)){
            $order = new Order;
            $order->langganan_id = $keranjang->kode_pelanggan;
            $order->status = 0;
            $order->jumlah_harga = 0;
            $order->sisa_tagihan = 0;
            $order->total_margin = 0;
            $order->total_margin_sales = 0;
            $order->save();
        }
        
        //simpan ke database order_detail
        $pesanan_baru = Order::where('langganan_id', $keranjang->kode_pelanggan)->where('status', 0)->first();

        //cek order detail
        $cek_order_detail = OrderDetail::where('barang_id', $keranjang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_order_detail)){
            $order_detail = new OrderDetail;
            $order_detail->barang_id = $keranjang->id;
            $order_detail->pesanan_id = $pesanan_baru->id;
            $order_detail->jumlah = $request->jumlah_pesanan;
            $order_detail->jumlah_harga = round($keranjang->harga_produk*$request->jumlah_pesanan, -3);
            $order_detail->margin_produk = round($keranjang->margin*$request->jumlah_pesanan, -3);
            $order_detail->margin_produk_sales = round($keranjang->margin_sales*$request->jumlah_pesanan, -3);
            $order_detail->save();
        }else{
            $order_detail = OrderDetail::where('barang_id', $keranjang->id)->where('pesanan_id', $pesanan_baru->id)->first();

            $order_detail->jumlah = $order_detail->jumlah+$request->jumlah_pesanan;

            //harga sekarang
            $harga_detail_baru = round($keranjang->harga_produk*$request->jumlah_pesanan, -3);
            $margin_baru = round($keranjang->margin*$request->jumlah_pesanan, -3);
            $margin_sales_baru = round($keranjang->margin_sales*$request->jumlah_pesanan, -3);
            $order_detail->jumlah_harga = round($order_detail->jumlah_harga+$harga_detail_baru, -3);
            $order_detail->margin_produk = round($order_detail->margin_produk+$margin_baru, -3);
            $order_detail->margin_produk_sales = round($order_detail->margin_produk_sales+$margin_sales_baru, -3);
            $order_detail->update();
        }

        //jumlah total
        $order = Order::where('langganan_id', $keranjang->kode_pelanggan)->where('status', 0)->first();
        $order->jumlah_harga = round($order->jumlah_harga+$keranjang->harga_produk*$request->jumlah_pesanan, -3);
        $order->sisa_tagihan = $order->jumlah_harga;
        $order->total_margin = round($order->total_margin+$keranjang->margin*$request->jumlah_pesanan, -3);
        $order->total_margin_sales = round($order->total_margin_sales+$keranjang->margin_sales*$request->jumlah_pesanan, -3);
        $order->update();

        

        return redirect()->route('langganan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
