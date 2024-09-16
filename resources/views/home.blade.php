@extends('adminlte::page')

@section('title', 'Fortuna Makmur Alkindo')

@section('content_header')
    <h1 class="m-0 text-dark">Halaman Utama</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Selamat Datang di FMA Group!</p>

<div class="panel">
  <div id="chartJumlah"></div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>

Highcharts.chart('chartJumlah', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Omset Produk'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
            @foreach($order_details as $key => $order_details)    
            {
            name: '{{ $order_details->barang_id }} ({{ $order_details->pesanan_id }})',
            y: {{ $order_details->jumlah }},
            sliced: true,
            selected: true
        },
                    @endforeach
            
]
}]
});
</script>
    @stop