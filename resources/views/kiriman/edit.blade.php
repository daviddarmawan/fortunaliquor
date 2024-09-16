@extends('adminlte::page')
@section('title', 'Edit Tanggal')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Tanggal</h1>
@stop
@section('content')
    <form action="{{route('kiriman.update', $order)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputtanggal_pengiriman">Tanggal Pengiriman</label>
                        <input type="date" class="form-control" name="tanggal_pengiriman" value="{{ old('tanggal_pengiriman', date('Y-m-d')) }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtanggal_jatuh_tempo">Tanggal Jatuh Tempo</label>
                        <input type="date" class="form-control" name="tanggal_jatuh_tempo" value="{{ old('tanggal_jatuh_tempo', date('Y-m-d')) }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('kiriman.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop