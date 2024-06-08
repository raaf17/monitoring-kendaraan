@extends('layout')

@section('title', 'Perusahaan')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Monitoring Kendaraan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
            <div class="breadcrumb-item">Monitoring Kendaraan</div>
        </div>
    </div>
    
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Monitoring Kendaraan</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th width="120px">Kendaraan</th>
                            <th width="120px">Pegawai</th>
                            <th width="257px">Tujuan</th>
                            <th width="80px">Status</th>
                            <th width="115px">BBM Yang Diperlukan (Liter)</th>
                            <th width="80px">Waktu Service</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    
    var dataTable;
    $(function() {
        dataTable = $('#table').dataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: '',
            columns: [
            {data: 'nama_kendaraan', name: 'kendaraan.nama_kendaraan'},
            {data: 'nama_pegawai', name: 'pegawai.nama_pegawai'},
            {data: 'tujuan_pemesanan', name: 'request_kendaraan.tujuan_pemesanan'},
            {data: 'status', name: 'status'},
            {data: 'bbm', name: 'bbm'},
            {data: 'jadwal_service', name: 'jadwal_service'},
            ]
        })
    });
</script>
@endpush