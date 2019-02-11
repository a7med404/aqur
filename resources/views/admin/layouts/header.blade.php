<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <title>
        {{ getSetting()}} | @yield('title')
    </title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style(asset('admin/css/bootstrap.min.en.css')) !!}

    <!-- MetisMenu CSS -->
    {!! Html::style(asset('admin/css/plugins/metisMenu/metisMenu.min.css')) !!}

    <!-- Timeline CSS -->
    {!! Html::style(asset('admin/css/plugins/timeline.css')) !!}

    <!-- DataTables CSS -->
    {!! Html::style(asset('admin/css/plugins/dataTables.bootstrap.en.css')) !!}

    <!-- Toastr CSS -->
    {!! Html::style(asset('admin/css/toastr.min.css')) !!}

    <!-- Sweet alert CSS -->
    {!! Html::style(asset('admin/css/sweetalert.css')) !!}

    <!-- Custom CSS -->
    {!! Html::style(asset('admin/css/style.en.css')) !!}

    <!-- Custom Fonts -->
    {!! Html::style(asset('admin/css/font-awesome/font-awesome.min.css')) !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header')

</head>
<body>

    <div id="wrapper">
