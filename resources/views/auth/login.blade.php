@extends('auth.layout')

@section('content')
<section class="section">
    <div class="container" style="margin-top: 110px">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    
                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                        @elseif (session('success'))
                        <div class="alert alert-success">{!! session('success') !!}</div>
                        @endif
                        
                        {!! Form::open(['id' => 'formAuth', 'method' => 'post', 'route' => ['user.login-post']]) !!}
                        <div id="reader" width="600px"></div>
                        <div class="form-group">
                            {!! Form::label('username', 'Username') !!}
                            {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Username']) !!}
                            @error('username')
                            <small class="text-danger">{{ '*'. $errors->first('username') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password']) !!}
                            @error('password')
                            <small class="text-danger">{{ '*'. $errors->first('password') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
