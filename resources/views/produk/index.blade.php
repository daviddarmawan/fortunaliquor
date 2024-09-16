@extends('adminlte::page')
@section('title', 'Produk')
@section('content_header')
    <h1 class="m-0 text-dark">Produk</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (auth()->user()->level=="Admin")
                    <a href="{{route('produk.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    @endif
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($produk as $key => $produk)
                            <tr>
                                <td>{{$produk->kode}}</a></td>
                                <td>{{ str_replace('_', ' ', $produk->nama) }}</a></td>
                                <td>{{ number_format($produk->harga)}}</a></td>
                                <td>
                                    <a href="{{route('produk.show', $produk)}}" class="btn btn-primary btn-xs">
                                        Info
                                    </a>
                                    <a href="{{route('produk.edit', $produk)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('produk.destroy', $produk)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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