<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function index($kode_pelanggan) {
        
        $order = Order::where('langganan_id', $kode_pelanggan)->where('status', 0)->first();
        $order_details = OrderDetail::where('pesanan_id', $order->id)->get();

        return view('checkout.index', compact('order', 'order_details'));

        }

    public function destroy(Request $request, $id)
        {
            $keranjang = Keranjang::find($id);
            if ($keranjang) $keranjang->delete();
        
            return redirect()->route('langganan.index')
                ->with('success_message', 'Berhasil menghapus kelompok produk');
        }

    public function delete($id)
        {
            $order_detail = OrderDetail::where('id', $id)->first();

            $order = Order::where('id', $order_detail->pesanan_id)->first();
            $order->jumlah_harga = $order->jumlah_harga-$order_detail->jumlah_harga;
            $order->sisa_tagihan = $order->sisa_tagihan-$order_detail->jumlah_harga;
            $order->total_margin = $order->total_margin-$order_detail->margin_produk;
            $order->total_margin_sales = $order->total_margin_sales-$order_detail->margin_produk_sales;
            $order->update();

            $order_detail->delete();

            return redirect()->route('langganan.index');
        }

    public function konfirmasi($pesanan_id)
    {
        $order = Order::where('id', $pesanan_id)->where('status', 0)->first();
        $order->status = 1;
        $order->update();

        return redirect()->route('langganan.index');
    }
}
