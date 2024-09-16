@extends('adminlte::page')
@section('title', 'Langganan Listing Sales Ogi')
@section('content_header')
    <h1 class="m-0 text-dark">Langganan Listing Sales Ogi</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('langganan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Sales</th>
                            <th>Nomor Hp</th>
                            <th>Alamat</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($langganan as $key => $langganan)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="keranjang/langganan/{{ $langganan->nama_pelanggan }}">{{ str_replace('_', ' ', $langganan->nama_pelanggan) }}</a></td>
                                <td>{{$langganan->nama_sales}}</a></td>
                                <td>{{$langganan->no_hp}}</a></td>
                                <td>{{$langganan->alamat}}</a></td>
                                <td><a href="{{ $langganan->lokasi }}" target="_blank">{{$langganan->lokasi}}</a></td></a></td>
                                <td>
                                    <a href="order/langganan/{{ $langganan->nama_pelanggan }}" class="btn btn-primary btn-xs">
                                        Order
                                    </a>
                                    <a href="{{route('langganan.show', $langganan)}}" class="btn btn-primary btn-xs">
                                        Info
                                    </a>
                                    <a href="{{route('langganan.edit', $langganan)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('langganan.destroy', $langganan)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
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