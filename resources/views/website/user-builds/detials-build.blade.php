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
                <div class="sidebar-content">             
					<div class="row">
						<div class="col-md-4">
							<div class="product service-image-left">                 
								<center>
									<img id="item-display" src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
								</center>
							</div>
							<div class="container service1-items col-sm-2 col-md-2 pull-left">
								<center>
									<a id="item-1" class="service1-item">
										<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
									</a>
									<a id="item-2" class="service1-item">
										<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
									</a>
									<a id="item-3" class="service1-item">
										<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
									</a>
								</center>
							</div>
						</div>
							
						<div class="col-md-6">
							<div class="product-title">{{ $buildInfo->bu_name }}</div>
							<div class="product-desc">{{ $buildInfo->bu_small_des }}</div>
							<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
							<hr>									
							<div class="product-price"><a href="{{ url('search?bu_square='.$buildInfo->bu_square) }}"> {{ $buildInfo->bu_square }}</a></div>
							<div class="product-stock">{{ selectType()[$buildInfo->bu_type] }}</div>
							<p> {{ $buildInfo->bu_large_des }} </p>
							<hr>
							<div class="btn-group cart">
								<button type="button" class="btn btn-success">
									Add to cart 
								</button>
							</div>
							<div class="btn-group wishlist">
								<button type="button" class="btn btn-danger">
									{{ $buildInfo->bu_price }} $ 
								</button>
							</div>
						</div>
						<div id="googleMap" style="width:100%;height:400px;"></div>
					</dive>{{-- row --}}
				</div>
				<h3> Aqaur Intrerested</h3>
                @include('website.build.sharefile', ['allBuild' => $sameRent])
                @include('website.build.sharefile', ['allBuild' => $sameType])
            </div>
        </div>
    </div>
</div>


<div class="container">
    <dev class="clearfix"></dev>
</div> <!--container end-->
@endsection

@section('footer')
<script>
	function myMap() {
	var mapProp= {
		center:new google.maps.LatLng({{ $buildInfo->bu_longitude }}, {{ $buildInfo->bn_latitude }} ),
		zoom:5,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOhEnZvB294BdDSzjJbrT-gmiSVnYmOGY&callback=myMap"></script>
@endsection