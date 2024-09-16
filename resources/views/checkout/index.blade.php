@extends('adminlte::page')

@section('title', 'Checkout')

@section('content_header')
    <h1 class="m-0 text-dark">Checkout {{ str_replace('_', ' ', $order->langganan_id) }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($order_details as $key => $order_details)   
                                <td>{{$key+1}}</td>
                                <td>{{ str_replace('_', ' ', $order_details->keranjang->nama_produk) }}</td>
                                <td>{{$order_details->jumlah}}btl</td>
                                <td>Rp. {{ number_format($order_details->keranjang->harga_produk)}}</td>
                                <td>Rp. {{ number_format($order_details->jumlah_harga)}}</td>
                                <td>
                                <form action="{{ url('check-out') }}/{{ $order_details->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <td colspan="4" align="right"><strong>Total Harga :</strong></td>
                        <td><strong>Rp. {{ number_format($order->jumlah_harga)}}</strong></td>
                        <td>
                        <a href="konfirmasi_checkout/{{ $order_details->pesanan_id }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        <i class="fa fa-shopping-cart"></i> Check Out
                                    </a>
                                </td>
                        </tbody>
                    </table>

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