<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ getSetting()}} | @yield('title')
    </title>
    <!-- Bootstrap core CSS -->
    {!! Html::style(asset('website/css/bootstrap.min.css')) !!}
    <!-- Custom fonts for this template -->
    {!! Html::style(asset('website/css/font-awesome.min.css')) !!}
    <!-- Plugin CSS -->
    {!! Html::style(asset('website/css/magnific-popup.css')) !!}
    <!-- Custom styles for this template -->
    {!! Html::style(asset('website/css/creative.en.css')) !!}
    <!-- Sweet alert CSS -->
    {!! Html::style(asset('admin/css/sweetalert.css')) !!}
    <!-- jssor.slider.min -->
    {!! Html::script(asset('website/js/jssor.slider.min.js')) !!}


    @yield('header')
</head>
<body id="page-top">

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Aqur</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    For Sell <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach(selectType() as $keyType => $type)
                    <li>
                        <a class="dropdown-item" href="{{ url('search?bu_rent=0&bu_type='.$keyType) }}">{{ $type }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    For Rent <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach(selectType() as $keyType => $type)
                    <li>
                        <a class="dropdown-item" href="{{ url('search?bu_rent=1&bu_type='.$keyType) }}">{{ $type }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('all-build') }}">All Build</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
             <!-- Authentication Links -->
            @guest
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login </a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('create-new-user') }}"> Register</a></li>
            @else 
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul>
                        <li><a class="nav-link js-scroll-trigger" href="{{ route('profile') }}">Edit Profile</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="{{ route('change-user-password') }}">Change Password</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="{{ route('user-build') }}">All My Aqurs</a></li>
                        <li><a class="nav-link js-scroll-trigger" href="{{ route('user-create-build') }}">Add Aqur</a></li>
                
                        <li><a class="dropdown-item nav-link " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </ul>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>






    <div id="app">
            
            @yield('content')
    </div>
    
    @yield('footer')

    <!-- Bootstrap core JavaScript -->
    {!! Html::script(asset('website/js/jquery.min.js')) !!}
    {!! Html::script(asset('website/js/bootstrap.bundle.min.js')) !!}
    {!! Html::script(asset('website/js/bootstrap.min.js')) !!}

    <!-- Plugin JavaScript -->
    {!! Html::script(asset('website/js/jquery.easing.min.js')) !!}
    {!! Html::script(asset('website/js/scrollreveal.min.js')) !!}
    {!! Html::script(asset('website/js/jquery.magnific-popup.min.js')) !!}

    <!-- Sweet Alert JavaScript -->
    {!! Html::script(asset('admin/js/sweetalert.min.js')) !!}

    <!-- Custom scripts for this template -->
    {!! Html::script(asset('website/js/creative.js')) !!}

    @if(Session::has('flash_massage'))
    <script>
        swal({
            title: "Good job!",
            text: "{{ Session::get('flash_massage') }}",
            icon: "success",
            showConfirmButton:false,
            timer: 2000,
           // button: "Aww yiss!",
        });
            //swal("title!", "Your content ",  "success", showConfirmButton: );
    </script>
    @endif


</body>
</html>
