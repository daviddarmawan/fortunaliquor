@extends('adminlte::page')

@section('title', 'List Keranjang')

@section('content_header')
    <h1 class="m-0 text-dark">List Keranjang {{ str_replace('_', ' ', $order_details[0]->keranjang->kode_pelanggan) }}</h1>
    <a href="https://wa.me/{{$order->langganan->no_hp}}" target="_blank" class="btn btn-success">Whatsapp</i></a>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>Customer # : {{ str_replace('_', ' ', $order->langganan_id) }} ({{$order->langganan->no_hp}}) *Sales {{$order->langganan->nama_sales}}*<br>Pembayaran : {{ $order->tanggal_jatuh_tempo }}<br>Alamat : {{ $order->langganan->alamat }}<br>Lokasi : {{ $order->langganan->lokasi }}<br>Order : </a></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($order_details as $key => $order_details)   
                                <td>- {{ str_replace('_', ' ', $order_details->keranjang->nama_produk) }} {{$order_details->jumlah}}btl ( {{ number_format($order_details->keranjang->harga_produk)}}/btl ) | {{ number_format($order_details->jumlah_harga)}}</td>
                            </tr>
                        @endforeach
                        <td><strong>*Total Tagihan Hari ini : Rp. {{ number_format($order->jumlah_harga)}}*</strong></td>
                        </tbody>
                    </table>
                    <br><br><br><br><br>
<p>NAMA BANK: BANK CENTRAL ASIA (BCA)<br>
CABANG BANK: SALATIGA<br>
NOMOR AKUN BANK: 013-107-6206<br>
ATAS NAMA: *DAVID SETIA DARMAWAN*<br><br>

NAMA BANK: BANK CENTRAL ASIA (BCA)<br>
CABANG BANK: KUDUS<br>
NOMOR AKUN BANK: 031-254-7714<br>
ATAS NAMA: *FRISKY FIRDAYANTO*<br><br>

NAMA BANK: BANK RAKYAT INDONESIA (BRI)<br>
CABANG BANK: KUDUS<br>
NOMOR AKUN BANK: 3084-0103-4254-539<br>
ATAS NAMA: *FRISKY FIRDAYANTO*</p>
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush