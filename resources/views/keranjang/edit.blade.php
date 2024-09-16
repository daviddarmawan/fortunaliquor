@extends('adminlte::page')
@section('title', 'Edit Deal Khusus')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Kelompok Produk</h1>
@stop
@section('content')
    <form action="{{route('keranjang.update', $keranjang)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputharga_produk">Harga Produk</label>
                        <input type="text" class="form-control @error('harga_produk') is-invalid @enderror" id="" placeholder="" name="harga_produk" value="{{$keranjang->harga_produk ?? old('harga_produk')}}">
                        @error('harga_produk') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMargin">Margin</label>
                        <input type="text" class="form-control @error('margin') is-invalid @enderror" id="" placeholder="" name="margin" value="{{$keranjang->margin ?? old('margin')}}">
                        @error('margin') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMargin_Sales">Margin Sales</label>
                        <input type="text" class="form-control @error('margin_sales') is-invalid @enderror" id="" placeholder="" name="margin_sales" value="{{$keranjang->margin_sales ?? old('margin_sales')}}">
                        @error('margin_sales') <span class="text-danger">{{$message}}</span> @enderror
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