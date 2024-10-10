@extends('adminlte::page')

@section('title', 'Langganan Belum Transaksi')

@section('content_header')
    <h1 class="m-0 text-dark">Langganan Belum Transaksi >= 30hari</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>Nama Toko</th>
                            <th>Nama Sales</th>
                            <th>Tanggal Terakhir Transaksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($orders as $key => $orders)   
                                <td>{{ str_replace('_', ' ', $orders->langganan_id) }}</td>
                                <td>{{ str_replace('_', ' ', $orders->nama_sales) }}</td>
                                <td>{{ \Carbon\Carbon::parse($orders->tanggal_pengiriman)->format('d-m-Y') }}</td>
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