@extends('admin.layouts.layout')

@section('title')
    Edit build Information
@endsection

@section('header')
@endsection

@section('page-content-header')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Edit build {{ $build->name }} </h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('/adminpanel') }}">HOME</a></li>
                <li><i class="fa fa-home"></i><a href="{{ url('/adminpanel/build') }}">build</a></li>
                <li><i class="fa fa-laptop"></i>
                    <a href="{{ url('/adminpanel/build/'.$build->id) }}">
                        build Information {{ $build->name }}
                    </a>
                </li>						  	
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
                    {!! Form::model($build, ['route' => ['build.update', $build->id], 'method' => "PATCH"]) !!}
                        @include('admin.build.form')
                    {!! Form::close() !!}             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')


@endsection
