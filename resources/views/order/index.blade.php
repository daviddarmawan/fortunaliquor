@extends('adminlte::page')

@section('title', 'List Keranjang')

@section('content_header')
    <h1 class="m-0 text-dark">List Order</h1>
    <a href="checkout/{{ $keranjang[0]->kode_pelanggan }}" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a>
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
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Margin</th>
                            <th>Margin Sales</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($keranjang as $key => $keranjang)   
                                <td>{{$key+1}}</td>
                                <td>{{ str_replace('_', ' ', $keranjang->nama_produk) }}</td>
                                <td>Rp. {{ number_format($keranjang->harga_produk)}}</td>
                                <td>Rp. {{ number_format($keranjang->margin)}}</td>
                                <td>Rp. {{ number_format($keranjang->margin_sales)}}</td>
                                <td>
                                    <a href="{{route('order.edit', $keranjang)}}" class="btn btn-primary btn-xs">
                                        Order
                                    </a>
                            </tr>
                        @endforeach
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