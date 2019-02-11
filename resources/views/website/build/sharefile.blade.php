
<div class="row">
@if(count($allBuild) > 0)
    @foreach($allBuild as $build)
        <div class="col-md-4 one-product">
            <figure class="card card-product">
                <div class="img-wrap"> 
                    <img src="{{ asset('storage/bulids/'.$build->bu_image)  }}">
                </div>
                <figcaption class="info-wrap">
                    <h6 class="title text-dots"><a href="{{ route('detials-build', ['id' => $build->id]) }}">{{ $build->bu_name}}</a></h6>
                    <div class="action-wrap">
                        <div class="text-justify">
                            {{ str_limit($build->bu_small_des, 70) }}
                        </div><br />
                        <div class="price-wrap h5">
                            <span class="price-new">{{ isForRent()[$build->bu_rent] }} </span>
                            <span class="square-new">Square: {{ $build->bu_square}}</span>
                        </div> <!-- price-wrap.// -->
                            <a href="{{ route('detials-build', ['id' => $build->id]) }}" class="btn btn-primary btn-sm float-right"> Show Detials </a>
                            <span class="price-new">{{ $build->bu_price}} $</span>
                    </div> <!-- action-wrap -->
                </figcaption>
            </figure> <!-- card // -->
        </div> <!-- col // -->
    @endforeach
@else
    <dev class="alert alert-warning">
        Oops No Aqurs To Show
    </dev>
@endif
</div> <!-- row.// -->