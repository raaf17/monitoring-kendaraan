{!! Form::open(['id' => 'formCreate']) !!}
    @include('request_kendaraan.form')
    <div class="text-right">
        <button type="button" class="btn btn-secondary" onclick="bootbox.hideAll()">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="store()">Submit</button>
    </div>
{!! Form::close() !!}