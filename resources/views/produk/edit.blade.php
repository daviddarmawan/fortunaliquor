@extends('adminlte::page')
@section('title', 'Edit Produk')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Produk</h1>
@stop
@section('content')
    <form action="{{route('produk.update', $produk)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputKode">Kode</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="" placeholder="" name="kode" value="{{$produk->kode ?? old('kode')}}">
                        @error('kode') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Barang</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="" placeholder="" name="nama" value="{{$produk->nama ?? old('nama')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHarga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="" placeholder="" name="harga" value="{{$produk->harga ?? old('harga')}}">
                        @error('harga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('produk.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop