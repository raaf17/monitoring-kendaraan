@extends('layout')

@section('title', 'Driver')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Driver</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Master Data</a></div>
            <div class="breadcrumb-item">Driver</div>
        </div>
    </div>
    
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Driver</h4>
                <div class="card-header-action">
                    <button type="button" class="btn btn-primary" onclick="create()"><i class="fa fa-plus"></i> Tambah Data</button>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th width="150px">Nama Driver</th>
                            <th width="602px">Alamat</th>
                            <th width="150px">Aksi</th>
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
            ajax: '{{ route('driver') }}',
            columns: [
            {data: 'nama_driver', name: 'driver.nama_driver'},
            {data: 'alamat', name: 'driver.alamat'},
            {data: '_', searchable: false, orderable: false, class: 'text-center'},
            ]
        })
    });
    
    function create() {
        $.ajax({
            url: '{{ route('driver.create') }}',
            success: function(response) {
                bootbox.dialog({
                    title: 'Create Driver',
                    message: response,
                })
            }
        })
    }
    
    function store() {
        $('#formCreate .alert').remove();
        $.ajax({
            url: '{{ route('driver.store') }}',
            type: 'POST',
            dataType: 'JSON',
            data: $('#formCreate').serialize(),
            success: function(response) {
                if (response.success) {
                    toastr.success('Success', response.message);
                    dataTable.api().ajax.reload();
                } else {
                    toastr.error('Failed', response.message);
                }
                bootbox.hideAll();
            },
            error: function(error) {
                var response = JSON.parse(error.responseText);
                $('#formCreate').prepend(validation(response))
            }
        })
    }
    
    function edit(id) {
        $.ajax({
            url: '{{ route('driver.edit') }}/'+id,
            success: function(response) {
                bootbox.dialog({
                    title: 'Edit Driver',
                    message: response,
                })
            }
        })
    }
    
    function view(id) {
        $.ajax({
            url: '{{ route('driver.view') }}/'+id,
            success: function(response) {
                bootbox.dialog({
                    title: 'Lihat Driver',
                    message: response,
                })
            }
        })
    }
    
    function update(id) {
        $('#formEdit .alert').remove();
        $.ajax({
            url: '{{ route('driver.update') }}/'+id,
            type: 'POST',
            dataType: 'JSON',
            data: $('#formEdit').serialize(),
            success: function(response) {
                if (response.success) {
                    toastr.success('Success', response.message);
                    dataTable.api().ajax.reload();
                } else {
                    toastr.error('Failed', response.message);
                }
                bootbox.hideAll();
            },
            error: function(error) {
                var response = JSON.parse(error.responseText);
                $('#formEdit').prepend(validation(response))
            }
        })
    }
    
    function destroy(id) {
        bootbox.confirm("Apakah anda yakin ingin menghapus data ini?", function(result) { 
            if (result) {
                $.ajax({
                    url: '{{ route('driver.delete') }}/'+id,
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Success', response.message);
                            dataTable.api().ajax.reload();
                        } else {
                            toastr.error('Failed', response.message);
                        }
                    }
                })
            }
        });
    }
    
    function validation(errors){
        var validations = '<div class="alert alert-danger">';
            validations += '<ul>'
                $.each(errors.errors, function(i, error){
                    validations += '<li>'+$.ucfirst(error[0])+'</li>';
                });
                validations += '</ul>'
                validations += '</div>';
                return validations;
            }
            
        </script>
        @endpush