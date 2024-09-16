@extends('adminlte::page')

@section('title', 'Info Langganan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Langganan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td>{{ $langganan->nama_pelanggan}}</td>
                        </tr>
                        <tr>
                            <td>Nama Sales</td>
                            <td>{{ $langganan->nama_sales}}</td>
                        </tr>
                        <tr>
                            <td>Nomor Hp</td>
                            <td>{{ $langganan->no_hp}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $langganan->alamat}}</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>{{ $langganan->lokasi}}</td>
                        </tr>
                        <tr>
                            <td>Titik</td>
                            <td>{{ $langganan->titik}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('langganan.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop