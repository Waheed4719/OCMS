<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('/js/jquery-3.4.1.js')}}" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>






    <style media="screen">
      .err{
        height: 30px;
        width:100%;
        background-color: royalblue;
        margin-top: 0px;
        padding-top: 2px;
        padding-bottom:1px;
        color: white;
        font-weight: bold;
        text-align: center;
      }
    </style>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/fontawesome.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    OCMS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          @Auth('web')                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                          @endAuth
                        @endguest
                        @guest('therapist')
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('Therapist.login')}}">{{ __('Login as Therapist') }}</a>
                              </li>
                        @endguest
                        @auth('therapist')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('therapist')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                      @endauth
                        <li class="nav-item">
                          <a class="nav-link" href=" {{ url('/new') }}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href=" {{ url('/therapists') }}">Therapists</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href=" {{ url('/posts') }}">Advice</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href=" {{ url('/chat') }}">Appointment</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li>





                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>













    <footer class="pt-5 pb-4" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                        <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                        <p class="mb-4">We are with you till the end.</p>
                        <ul class="f-address">
                            <li>
                                <div class="row">
                                    <div class="col-1"><i class="fas fa-map-marker"></i></div>
                                    <div class="col-10">
                                        <h6 class="font-weight-bold mb-0">Address:</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-1"><i class="far fa-envelope"></i></div>
                                    <div class="col-10">
                                        <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                                        <p><a href="#">Support@userthemes.com</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                                    <div class="col-10">
                                        <h6 class="font-weight-bold mb-0">Address:</h6>
                                        <p><a href="#">+880 1672365547</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                        <h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
                        <ul class="f-address">
                            <li>
                                <div class="row">
                                    <div class="col-1"><i class="fab fa-twitter"></i></div>
                                    <div class="col-10">
                                        <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                        <label>10 Mins Ago</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-1"><i class="fab fa-twitter"></i></div>
                                    <div class="col-10">
                                        <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                        <label>10 Mins Ago</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-1"><i class="fab fa-twitter"></i></div>
                                    <div class="col-10">
                                        <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                        <label>10 Mins Ago</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                        <h5 class="mb-4 font-weight-bold">NAVIGATION</h5>
                        <ul class="recent-post">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Therapists</a>
                            </li>
                            <li>
                                <a href="#">Advice</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                        <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
                        <div class="input-group">
                              <input type="text" class="form-control" placeholder="Your Email Address">
                              <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
                        </div>
                        <ul class="social-pet mt-4">
                            <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright -->
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="text-center text-white">
                            &copy; 2019 OCMS. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>
