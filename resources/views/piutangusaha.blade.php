@extends('adminlte::page')

@section('title', 'Fortuna Artha Niaga')

@section('content_header')
    <h1 class="m-0 text-dark">Halaman Piutang Usaha</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Periksa Cashflow!</p>

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
        text: 'Persentase Piutang Usaha'
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
        name: 'Persentase Omset',
        colorByPoint: true,
        data: [
            @foreach($order as $key => $order)    
            {
            name: '{{ str_replace('_', ' ', $order->langganan_id) }} (Rp. {{ number_format($order->sisa_tagihan)}})',
            y: {{ $order->sisa_tagihan }},
            sliced: true,
            selected: true
        },
                    @endforeach
            
]
}]
});
</script>
    @stop