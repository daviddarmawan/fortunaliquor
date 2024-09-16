<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    use HasFactory;

    protected $table = 'langganans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_pelanggan',
        'nama_sales',
        'no_hp',
        'alamat',
        'lokasi',
        'titik',
    ];

    public function Keranjang(){
        return $this->hasMany(Keranjang::class,'kode_pelanggan', 'id');
    }
    public function Order() {
     return $this->hasMany(OrderDetail::class,'langganan_id', 'nama_pelanggan');
    }
}