@extends('layout')

@section('title','Pengaturan Profile')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Account</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
    
    <div class="section-body">
        <div class="card card-primary">
            <div class="card-body">
                <div class="text-center mb-2">
                    <div class="avatar avatar-primary avatar-circle widget12" style="cursor: pointer" id="qrAvatar">
                        <div class="avatar-display" style="padding-top: 12px">
                            <i class="fa fa-user-alt"></i>
                        </div>
                    </div>
                </div>
                
                @if (session('error'))
                <div class="alert alert-danger">{!! session('error') !!}</div>
                @elseif(session('success'))
                <div class="alert alert-success">{!! session('success') !!}</div>
                @endif
                
                {!! Form::open(['method' => 'post', 'route' => ['profile.update',['id' => auth()->user()->id] ]]) !!}
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="float-label float-label-lg">
                                <label for="username">Username</label>
                                {!! Form::text('username', auth()->user()->username, ['class' => 'form-control', 'id' => 'username']) !!}
                            </div>
                            @error('username')
                            <small class="text-danger">{{ '*'. $errors->first('username') }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="float-label float-label-lg">
                                <label for="password">Password</label>
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password']) !!}
                            </div>
                            @error('password')
                            <small class="text-danger">{{ '*'. $errors->first('password') }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="float-label float-label-lg">
                                <label for="konfirmasiPassword">Konfirmasi Password</label>
                                {!! Form::password('confirm_password', ['class' => 'form-control', 'id' => 'konfirmasiPassword', 'placeholder' => 'Konfirmasi Password']) !!}
                            </div>
                            <small class="text-danger err_confirm_new_pass"></small>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-lg btn-widest">Simpan</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection
