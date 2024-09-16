@extends('adminlte::page')

@section('title', 'Info Produk')

@section('content_header')
    <h1 class="m-0 text-dark">Info Produk</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Kode</td>
                            <td>{{ $produk->kode}}</td>
                        </tr>
                        <tr>
                            <td>Kode Berkas</td>
                            <td>{{ $produk->nama}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ number_format($produk->harga)}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('produk.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop