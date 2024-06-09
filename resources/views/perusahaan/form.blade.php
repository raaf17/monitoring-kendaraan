<div class="form-group">
    {!! Form::label('namaPerusahaan', 'Nama Perusahaan') !!}
    {!! Form::text('nama_perusahaan', null, ['class' => 'form-control', 'id' => 'namaPerusahaan']) !!}
</div>
<div class="form-group">
    {!! Form::label('namaTambang', 'Nama Tambang') !!}
    {!! Form::select('id_tambang', ['' => 'Pilih'] + \App\Models\Tambang::pluck('nama_tambang', 'id')->toArray(), null, ['class' => 'form-control', 'id' => 'namaTambang']) !!}
</div>
<div class="form-group">
    {!! Form::label('alamat', 'Alamat') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
</div>
<div class="form-group">
    {!! Form::label('jenisPerusahaan', 'Jenis Perusahaan') !!}
    {!! Form::select('utama', ['' => 'Pilih', '1' => 'Pusat', '2' => 'Cabang', '3' => 'Kontributor'], null, ['class' => 'form-control', 'id' => 'jenisPerusahaan']) !!}
</div>