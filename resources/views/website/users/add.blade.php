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
                            <li><i class="fa fa-home"></i><a href="{{ url('/') }}"> Build</a></li>				  	
                            <li><i class="fa fa-home"></i><a href="{{ url('/') }}"> Add New Build</a></li>				  	
                        </ol>
                    </div>   
                </div><!-- /.col-lg-12 -->
                <div class="sidebar-content">
                    {!! Form::open(['route' => ['store-new-user'], 'method' => "POST"]) !!}
                        @include('admin.users.form', ['isUser' => 1])
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


