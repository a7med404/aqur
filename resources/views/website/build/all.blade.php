@extends('layouts.app')
@section('title') All Build @endsection

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
                            @if(isset($array)) 
                                @if(!empty($array))
                                    @foreach($array as $key => $value)
                                        <li> / <a href="{{ url('/search?'.$key.'='.$value) }}"> {{ searchNameFiled()[$key] }} -> 
                                            @if($key == 'bu_type')
                                                {{ selectType()[$value] }}
                                            @elseif($key == 'bu_rent')
                                                {{ isForRent()[$value] }}
                                            @else
                                                {{ $value }}
                                            @endif
                                        </a> </li>
                                    @endforeach
                                @endif
                            @endif					  	
                        </ol>
                    </div>   
                </div><!-- /.col-lg-12 -->
                <div class="sidebar-content">
                    @include('website.build.sharefile', ['allBuild' => $builds])
                    @if(count($builds) > 0)
                        <div class="text-center">
                            {{ $builds->appends(Request::except('page'))->render() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div><!--container end-->
    <dev class="clearfix"></dev>
@endsection

@section('footer')
@endsection


