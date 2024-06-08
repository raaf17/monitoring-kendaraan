@extends('layout')

@section('title', 'Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Users</h4>
                    </div>
                    <div class="card-body">
                        131
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-building"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        131
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        12313
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Permintaan Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        313
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="card">
    <div class="card-body">
        <div id="chart"></div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(function() {
        $.ajax({
            url: '',
            success: function(response) {
                var jumlah = [];
                var nama_kendaraan = [];
                $.each (response, function(i, row) {
                    jumlah.push(row.jumlah)
                    nama_kendaraan.push(row.nama_kendaraan)
                })
                var options = {
                    series: [{
                        name: 'Frekuensi',
                        type: 'column',
                        data: jumlah
                    }],
                    chart: {
                        height: 300,
                        type: 'line',
                    },
                    stroke: {
                        width: [0, 4]
                    },
                    title: {
                        text: 'Kendaraan Yang Digunakan'
                    },
                    dataLabels: {
                        enabled: true,
                        enabledOnSeries: [1]
                    },
                    labels: nama_kendaraan,
                    yaxis: [{
                        title: {
                            text: 'Frekuensi',
                        },
                    }]
                };
                
                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();  
            }
        })
    })
</script>
@endpush