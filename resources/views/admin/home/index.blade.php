@extends('admin.layouts.layout')

@section('title')
    Dashboard
@endsection

@section('content')


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-paper-plane fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{ $unpanddingBuild->count() }}</div>
                                    <div>New Aqurs!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('build-unPandding') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{ $users->count() }}</div>
                                    <div>All Users!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('users.index') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{ $allBuild->count() }}</div>
                                    <div>All Aqurs!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('build.index') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{ $panddingBuild->count() }}</div>
                                    <div>Pandding Aqurs!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('build-pandding') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

@endsection