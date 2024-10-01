@extends('adminlte::page')
@section('title', 'Terkirim')
@section('content_header')
    <h1 class="m-0 text-dark">Terkirim</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <!-- <th>Nama Sales</th> -->
                            <th>Status</th>
                            <th>Jumlah Tagihan</th>
                            <th>Sisa Tagihan</th>
                            <th>Rekap Margin</th>
                            <th>Rekap Margin Sales</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Tanggal Jatuh Tempo</th>
                            <th>Status Margin</th>
                            <th>Invoice</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $key => $order)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="terkirim/{{ $order->id }}">{{ str_replace('_', ' ', $order->langganan_id) }}</a></td></a></td>
                                <!-- <td>{{$order->langganan->nama_sales}}</a></td> -->
                                <td><i class="fa fa-paper-plane"></i> Terkirim</td>
                                <td>Rp. {{ number_format($order->jumlah_harga)}}</td>
                                <td>Rp. {{ number_format($order->sisa_tagihan)}}</td>
                                <td><a href="margin/{{ $order->id }}">Rp. {{ number_format($order->total_margin)}}</a></td></a></td>
                                <td><a href="margin_sales/{{ $order->id }}">Rp. {{ number_format($order->total_margin_sales)}}</a></td></a></td>
                                <td>{{ $order->tanggal_pengiriman }}</td>
                                <td>{{ $order->tanggal_jatuh_tempo }}</td>
                                @if($order->status_margin =='1')
                                <td><a href="" class="btn btn-danger"></i>Belum Cair</a></td>
                                @elseif($order->status_margin =='2')
                                <td><a href="" class="btn btn-warning"></i>Proses pencairan</a></td>
                                @elseif($order->status_margin =='3')
                                <td><a href="" class="btn btn-success"></i>Sudah Cair</a></td>
                                @else
                                <td><a href="" class="btn btn-dark"></i>Batalan</a></td>
                                @endif
                                <td>
                                    <a href="{{route('debit.edit', $order)}}" class="btn btn-primary"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        Edit Tanggal</a>
                                    <a href="surat_jalan/{{ $order->id }}" class="btn btn-warning"><i class="fa fa-car" aria-hidden="true"></i> Surat Jalan</a>
                                    <a href="invoice/{{ $order->id }}" class="btn btn-secondary"><i class="fa fa-file" aria-hidden="true"></i> Invoice Rek David</a>
                                    <a href="invoice2/{{ $order->id }}" class="btn btn-secondary"><i class="fa fa-file" aria-hidden="true"></i> Invoice Rek Frisky</a>
                                </td>
                                <td><a href="konfirmasi_belumterkirim/{{ $order->id }}" class="btn btn-warning" onclick="return confirm('Anda yakin ubah status menjadi belum terkirim ?');">
                                <i class="fa fa-paper-plane"></i> Batal Terkirim</a></td>
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