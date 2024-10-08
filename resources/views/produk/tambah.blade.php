@extends('adminlte::page')
@section('title', 'Tambah Produk')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Produk</h1>
@stop
@section('content')
    <form action="{{route('produk.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputKode">Kode</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="" name="kode">
                        @error('kode') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Produk</label>
                        <h6 class="m-0 text-dark">NAMA PRODUK DILARANG MENGGUNAKAN SPASI " " TETAPI MENGGUNAKAN UNDERSCORE "_" | CONTOH : "Kawa_Hijau"</h6>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="" name="nama">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHarga">Harga</label>
                        <h6 class="m-0 text-dark">HARGA PRODUK DILARANG MENGGUNAKAN KOMA "," DAN TITIK "." </h6>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="" name="harga">
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