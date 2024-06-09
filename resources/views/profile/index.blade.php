@extends('layout')

@section('title','Profile User')

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
                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="float-label float-label-lg">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="{{ auth()->user()->username }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="float-label float-label-lg">
                                <label for="username">Role</label>
                                <input type="text" name="username" id="username" class="form-control" value="{{ auth()->user()->role }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
