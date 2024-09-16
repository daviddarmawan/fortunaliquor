@extends('adminlte::page')
@section('title', 'Kiriman')
@section('content_header')
    <h1 class="m-0 text-dark">Kiriman</h1>
    <h5>Tanggal Pengiriman dan Tanggal Jatuh Tempo Wajib Di isi</h5>
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
                            <th>Nama Sales</th>
                            <th>Jumlah Tagihan</th>
                            <th>Rekap Margin</th>
                            <th>Rekap Margin Sales</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Tanggal Jatuh Tempo</th>
                            <th>Invoice</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $key => $order)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="kiriman/{{ $order->id }}">{{ str_replace('_', ' ', $order->langganan_id) }}</a></td></a></td>
                                <td>{{ $order->langganan->nama_sales }}</td>
                                <td>Rp. {{ number_format($order->jumlah_harga)}}</td>
                                <td><a href="margin/{{ $order->id }}">Rp. {{ number_format($order->total_margin)}}</a></td></a></td>
                                <td><a href="margin_sales/{{ $order->id }}">Rp. {{ number_format($order->total_margin_sales)}}</a></td></a></td>
                                <td>{{ $order->tanggal_pengiriman }}</td>
                                <td>{{ $order->tanggal_jatuh_tempo }}</td>
                                <td>
                                    <a href="{{route('kiriman.edit', $order)}}" class="btn btn-primary"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        Edit Tanggal</a>
                                    <a href="surat_jalan/{{ $order->id }}" class="btn btn-warning"><i class="fa fa-car" aria-hidden="true"></i> Surat Jalan</a>
                                    <a href="invoice/{{ $order->id }}" class="btn btn-secondary"><i class="fa fa-file" aria-hidden="true"></i> Invoice Rek David</a>
                                    <a href="invoice2/{{ $order->id }}" class="btn btn-secondary"><i class="fa fa-file" aria-hidden="true"></i> Invoice Rek Frisky</a>
                                </td>
                                <td><a href="konfirmasi_terkirim/{{ $order->id }}" class="btn btn-success" onclick="return confirm('Anda yakin terkirim ?');">
                                        <i class="fa fa-paper-plane"></i> Terkirim</a>
                                    <a href="konfirmasi_belumcheckout/{{ $order->id }}" class="btn btn-warning" onclick="return confirm('Anda yakin ubah status menjadi belum check-out ?');">
                                        <i class="fa fa-paper-plane"></i> Undo Check-Out</a>
                                    <a href="konfirmasi_batalan/{{ $order->id }}" class="btn btn-danger" onclick="return confirm('Anda yakin batalan ?');">
                                        <i class="fa fa-paper-plane"></i> Batalan</a>
                                </td>
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