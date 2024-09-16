@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1 class="m-0 text-dark">Order</h1>
@stop

@section('content')

<form action="{{route('order.update', $keranjang)}}" method="post">
        @method('PUT')
        @csrf
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama Barang</td>
                            <td>{{ str_replace('_', ' ', $keranjang->nama_produk) }}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>Rp. {{ number_format($keranjang->harga_produk)}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesan</td>
                            <td><input type="text" name="jumlah_pesanan">
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('langganan.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Order</button>
                </div>
            </div>
        </div>
    </div>
@stop