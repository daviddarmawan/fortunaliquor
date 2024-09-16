@extends('adminlte::page')

@section('title', 'Kebutuhan')

@section('content_header')
    <h1 class="m-0 text-dark">Kebutuhan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Jumlah Kebutuhan</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($order_details as $key => $order_details)   
                                <td>{{ str_replace('_', ' ', $order_details->nama_produk) }}</td>
                                <td>{{ number_format($order_details->total_jumlah)}}btl</td>
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