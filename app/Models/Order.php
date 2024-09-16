<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'langganan_id',
        'status',
        'jumlah_harga',
        'tanggal_pengiriman',
        'tanggal_jatuh_tempo',
        'pembayaran',
        'sisa_tagihan',
        'total_margin',
        'total_margin_sales',
    ];
    public function Langganan(){
        return $this->belongsTo(Langganan::class,'langganan_id', 'nama_pelanggan');
    }

    public function OrderDetail() 
	{
	     return $this->hasMany(OrderDetail::class,'pesanan_id', 'id');
	}
}
