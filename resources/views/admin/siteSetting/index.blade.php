@extends('admin.layouts.layout')

@section('title')
    Site Setting
@endsection

@section('page-content-header')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Site Setting </h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="url('/adminpanel')">HOME</a></li>
                <li><i class="fa fa-laptop"></i>Site Setting</li>						  	
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row --> 
@endsection


@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">


                    {!! Form::open(['route' => ['side-setting-update'], 'method' => "POST", 'file' => true]) !!}
                    @foreach($stieSetting as $setting)
                        <div class="form-group row">
                            <label for="{{ $setting->name_setting }}" class="col-md-4 col-form-label text-md-right">{{ $setting->slug }}</label>
                            <div class="col-md-8">
                                @if($setting->type == 1)
                                    {!! Form::text($setting->name_setting, $setting->value, ['id' => '{{ $setting->name_setting }}', 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'autofocus']) !!}
                                @elseif($setting->type == 0)
                                    {!! Form::textarea($setting->name_setting, $setting->value, ['id' => '{{ $setting->name_setting }}', 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'autofocus']) !!}                                
                                @else
                                    {!! Form::file($setting->name_setting, ['id' => '{{ $setting->name_setting }}', 'class' => "form-control {{ $errors->has($setting->name_setting) ? ' is-invalid' : '' }}", 'value' => "{{ old($setting->name_setting) }}", 'autofocus']) !!}                                
                                @endif
                                @if ($errors->has($setting->name_setting))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first($setting->name_setting) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button name="submit" type="submit" class="btn btn-primary">
                                Save Setting 
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

