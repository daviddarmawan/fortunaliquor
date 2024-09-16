@extends('adminlte::page')
@section('title', 'Batalan')
@section('content_header')
    <h1 class="m-0 text-dark">Batalan</h1>
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
                            <th>Nama Pelanggan</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $key => $order)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="batalan/{{ $order->id }}">{{ str_replace('_', ' ', $order->langganan_id) }}</a></td></a></td>
                                <td><i class="fa fa-ban"></i> Batalan</td>
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