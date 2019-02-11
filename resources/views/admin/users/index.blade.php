@extends('admin.layouts.layout')

@section('title')
    Users Management
@endsection

@section('page-content-header')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Users Management </h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('/adminpanel') }}">HOME</a></li>
                <li><i class="fa fa-laptop"></i>Users</li>						  	
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row --> 
@endsection



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('users.create') }}">Add New User</a></br></br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Users Management
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>E-Mail</th>
                                    <th>Level</th>
                                    <th>Has Aques</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    @if($user->id != \Auth::user()->id)
                                    <tr class="odd gradeX">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a class="btn btn-warning btn-xs"   href="{{ route('users.editLevel', ['id' => $user->id]) }}">
                                            {{ $user->admin  == 1 ? 'Admin' : 'User'  }}
                                        </a></td>
                                        <td><a class="badge badge-info" href="{{ route('show-user-build', ['id' => $user->id]) }}">{{ $user->builds->count() }}</a></td>
                                        <td>
                                            <a class="btn btn-info btn-xs"   href="{{ route('users.edit', ['id' => $user->id]) }}">Edit</a>
                                            <a class="btn btn-danger btn-xs" href="{{ url('adminpanel/users/'.$user->id.'/delete') }}">Delete</a>
                                            <a class="btn btn-warning btn-xs" href="{{ route('change-password', ['id' => $user->id]) }}">Chage Password</a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection