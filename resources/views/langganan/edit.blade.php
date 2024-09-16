@extends('adminlte::page')
@section('title', 'Edit Langganan')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Langganan</h1>
@stop
@section('content')
    <form action="{{route('langganan.update', $langganan)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama Pelanggan</label>
                        <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="" placeholder="" name="nama_pelanggan" value="{{$langganan->nama_pelanggan ?? old('nama_pelanggan')}}">
                        @error('nama_pelanggan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Sales</label>
                        <input type="text" class="form-control @error('nama_sales') is-invalid @enderror" id="" placeholder="" name="nama_sales" value="{{$langganan->nama_sales ?? old('nama_sales')}}">
                        @error('nama_sales') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoHp">Nomor Hp</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="" placeholder="" name="no_hp" value="{{$langganan->no_hp ?? old('no_hp')}}">
                        @error('no_hp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="" placeholder="" name="alamat" value="{{$langganan->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLokasi">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="" placeholder="" name="lokasi" value="{{$langganan->lokasi ?? old('lokasi')}}">
                        @error('lokasi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitik">Titik</label>
                        <input type="text" class="form-control @error('titik') is-invalid @enderror" id="" placeholder="" name="titik" value="{{$langganan->titik ?? old('titik')}}">
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