@extends('admin.layouts.layout')

@section('title')
    Add New User
@endsection



@section('page-content-header')

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Add New User </h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ url('/adminpanel') }}">HOME</a></li>
                        <li><i class="fa fa-home"></i><a href="{{ url('/adminpanel/users') }}">Users</a></li>
                        <li><i class="fa fa-laptop"></i>Add New User</li>						  	
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
                    {!! Form::open(['route' => ['users.store'], 'method' => "POST"]) !!}
                        @include('admin.users.form')
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection