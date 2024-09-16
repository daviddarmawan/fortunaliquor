<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'kode_pelanggan',
        'margin',
        'margin_sales',
    ];
    public function Langganan(){
        return $this->belongsTo(Langganan::class,'kode_pelanggan', 'id');
    }

    public function order_details() 
	{
	     return $this->hasMany(OrderDetail::class,'barang_id', 'id');
	}
}
