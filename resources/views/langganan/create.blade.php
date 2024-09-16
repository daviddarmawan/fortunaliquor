@extends('adminlte::page')
@section('title', 'Tambah Langganan Listing')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Langganan Listing</h1>
@stop
@section('content')
    <form action="{{route('langganan.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama Pelanggan</label>
                        <h6 class="m-0 text-dark">NAMA PELANGGAN DILARANG MENGGUNAKAN SPASI " " TETAPI MENGGUNAKAN UNDERSCORE "_" | CONTOH : "Holly_Wings"</h6>
                        <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="nama_pelanggan" placeholder="" name="nama_pelanggan">
                        @error('nama_pelanggan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNam">Nama Sales</label>
                        <input type="text" class="form-control @error('nama_sales') is-invalid @enderror" id="nama_sales" placeholder="" name="nama_sales">
                        @error('nama_sales') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoHp">Nomor Hp</label>
                        <h6 class="m-0 text-dark">NO HP DILARANG MENGGUNAKAN ANGKA "0" DI AWAL TETAPI MENGGUNAKAN ANGKA "+62"</h6>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="" name="no_hp">
                        @error('no_hp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="" name="alamat">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLokasi">Lokasi</label>
                        <h6 class="m-0 text-dark">MASUKKAN LINK GOOGLE MAPS</h6>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="" name="lokasi">
                        @error('lokasi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitik">Titik</label>
                        <h6 class="m-0 text-dark">MASUKKAN TITIK GOOGLE MAPS</h6>
                        <input type="text" class="form-control @error('titik') is-invalid @enderror" id="titik" placeholder="" name="titik">
                        @error('titik') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('langganan.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop