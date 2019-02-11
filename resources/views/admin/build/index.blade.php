@extends('admin.layouts.layout')

@section('title')
    Aqurs Management
@endsection

@section('page-content-header')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Aqurs Management </h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('/adminpanel') }}">HOME</a></li>
                <li><i class="fa fa-laptop"></i>Aqurs</li>						  	
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row --> 
@endsection



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('build.create') }}">Add New Aqur</a></br></br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Aqurs Management
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Added At</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($builds as $build)
                                    <tr class="odd gradeX">
                                        <td>{{ $build->id }}</td>
                                        <td>{{ $build->bu_name }}</td>
                                        <td><img src="{{ asset('storage/'.getDefaultImage($build->bu_image)) }}" alt="Aqur image"></td>
                                        <td>{{ $build->bu_price }}</td>
                                        <td>{{ selectType()[$build->bu_type] }}</td>
                                        <td><a class="btn btn-warning btn-xs"   href="{{ route('build-editStatus', ['id' => $build->id]) }}">
                                            {{ $build->bu_status  == 1 ? 'Panding' : 'Un Panding'  }}
                                        </a></td>
                                        <td>{{ $build->created_at }}</td>
                                        <td>
                                            <a class="btn btn-info btn-xs"   href="{{ route('build.edit', ['id' => $build->id]) }}">Edit</a>
                                            <a class="btn btn-danger btn-xs" href="{{ url('adminpanel/build/'.$build->id.'/delete') }}">Delete</a>
                                        </td>
                                    </tr>
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
{{--  {{ route('build.editStatus', ['id' => $build->id]) }}  --}}