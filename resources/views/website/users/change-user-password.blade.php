@extends('layouts.app')
@section('title') Add Build @endsection

@section('header')
    <!-- Custom styles for this template -->
    {!! Html::style(asset('website/css/custom/build-all.css')) !!}
@endsection

@section('content')
<div class="container">
    <div class="card"><p/>
        <div class="row sidebar">
                @include('website.build.sidebar')
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="{{ url('/') }}"> HOME</a></li>
                            <li><i class="fa fa-home"></i><a href="{{ url('/') }}"> Profile</a></li>				  	
                            <li><i class="fa fa-home"></i><a href="{{ url('/') }}"> Change Password</a></li>				  	
                        </ol>
                    </div>   
                </div><!-- /.col-lg-12 -->
                <div class="sidebar-content">
                    {!! Form::open(['route' => ['user-store-password'], 'method' => "POST"]) !!}
                            <div class="form-group row">
                                <label for="old_password" class="col-md-4 col-form-label text-md-right">Old Password</label>
                                <div class="col-md-6">
                                    {!! Form::password('old_password', ['id' => 'old_password', 'class' => "form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}", 'value' => "{{ old('old_password') }}", 'placeholder' => 'Old Password', 'required']) !!}
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <hr />

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    {!! Form::password('password', ['id' => 'password', 'class' => "form-control {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'placeholder' => 'New Password', 'required']) !!}
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    {!! Form::password('password_confirmation', ['id' => 'password-confirm', 'class' => "form-control {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'placeholder' => 'Confirm New Password', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div><!--container end-->
    <dev class="clearfix"></dev>
@endsection

@section('footer')
@endsection


