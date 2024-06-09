@extends('layout')

@section('title', 'Log Activity')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Log Activity</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
            <div class="breadcrumb-item">Log Activity</div>
        </div>
    </div>
    
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Log Activity</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Class</th>
                            <th>Action</th>
                            <th>Url</th>
                            <th>Method</th>
                            <th>Activity</th>
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
            processing: false,
            serverSide: true,
            scrollX: true,
            ajax: '',
            columns: [
            {data: 'created_at', name: 'log_activity.created_at'},
            {data: 'class', name: 'log_activity.class'},
            {data: 'action', name: 'log_activity.action'},
            {data: 'url', name: 'log_activity.url'},
            {data: 'method', name: 'log_activity.method'},
            {data: 'activity', name: 'log_activity.activity'},
            ]
        })
    });
</script>
@endpush