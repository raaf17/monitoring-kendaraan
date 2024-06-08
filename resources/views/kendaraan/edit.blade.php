{!! Form::model($model, ['id' => 'formEdit']) !!}
    @include('kendaraan.form')
    <div class="text-right">
        <button type="button" class="btn btn-secondary" onclick="bootbox.hideAll()">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="update('{{ $model->id }}')">Save</button>
    </div>
{!! Form::close() !!}
<script>
    $('#formEdit').buildForm();
</script>