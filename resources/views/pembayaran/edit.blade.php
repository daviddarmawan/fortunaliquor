@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1 class="m-0 text-dark">Order</h1>
@stop

@section('content')

<form action="{{route('pembayaran.update', $order)}}" method="post">
        @method('PUT')
        @csrf
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama pelanggan</td>
                            <td>{{ str_replace('_', ' ', $order->langganan_id) }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Piutang</td>
                            <td>Rp. {{ number_format($order->sisa_tagihan)}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembayaran</td>
                            <td><input type="text" name="pembayaran">
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('langganan.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </div>
            </div>
        </div>
    </div>
@stop