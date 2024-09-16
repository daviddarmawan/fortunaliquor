<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'barang_id',
        'pesanan_id',
        'jumlah',
        'jumlah_harga',
        'margin_produk',
        'margin_produk_sales',
    ];

    public function Order()
	{
	      return $this->belongsTo(Order::class,'pesanan_id', 'id');
	}
    public function keranjang()
	{
	      return $this->belongsTo(Keranjang::class,'barang_id', 'id');
	}
}
