@extends('adminlte::page')
@section('title', 'Tambah Produk')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Produk</h1>
@stop
@section('content')
    <form action="{{route('keranjang.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_pelanggan">Pilih Langganan</label>
                        <select name="kode_pelanggan" class="form-control @error('kode_pelanggan') is-invalid @enderror">
                            @error('kode_pelanggan') <span class="text-danger">{{$message}}</span> @enderror>
                                @foreach($pelanggan as $a){
                                    <option value={{ $a->nama_pelanggan }}>{{ str_replace('_', ' ', $a->nama_pelanggan) }}</option>';
                                @endforeach
                        </select>
                        </div>
                    <div class="form-group">
                        <label for="nama_produk">Pilih Produk</label>
                        <h6 class="m-0 text-dark">PRODUK DENGAN KODA "#K" = KONTAN "T" = TEMPO "B" = BONUS</h6>
                            <select name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror">
                                @error('nama_produk') <span class="text-danger">{{$message}}</span> @enderror>
                            
                                @foreach($produk as $p){
                                    <option value={{ $p->nama }}>{{ str_replace('_', ' ', $p->nama) }}</option>';
                                @endforeach
                        
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputharga_produk">Harga Produk</label>
                        <input type="text" class="form-control @error('harga_produk') is-invalid @enderror" id="harga_produk" placeholder="Masukkan Harga" name="harga_produk" value="{{old('harga_produk')}}">
                        @error('harga_produk') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputmargin">Margin</label>
                        <h6 class="m-0 text-dark">MASUKKAN ANGKA TANPA TANDA "." DAN ","</h6>
                        <input type="text" class="form-control @error('margin') is-invalid @enderror" id="margin" placeholder="Masukkan Margin" name="margin" value="{{old('margin')}}">
                        @error('margin') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputmargin_sales">Margin Sales</label>
                        <h6 class="m-0 text-dark">MASUKKAN ANGKA TANPA TANDA "." DAN "," | 0 JIKA TIDAK ADA</h6>
                        <input type="text" class="form-control @error('margin_sales') is-invalid @enderror" id="margin_sales" placeholder="Masukkan margin Sales" name="margin_sales" value="{{old('margin_sales')}}">
                        @error('margin_sales') <span class="text-danger">{{$message}}</span> @enderror
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