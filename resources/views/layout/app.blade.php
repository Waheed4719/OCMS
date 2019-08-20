<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset('/js/jquery-3.4.1.js')}}" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('sass/app.scss')}}">
       <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <title></title>
  </head>
  <body>
    <style media="screen">
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
    .navbar li a{
      font-weight: bold;

    }
    .navbar-brand{
      font-weight: 800 !important;
      color:white !important;
    }
    #login{
      color:black !important;
    }


    .modal-footer .f{
      margin-right: 130px;
    }
    h5{
      color: black;
      font-weight: bold;
    }

    ul {
        list-style: none;
        padding-left: 0;
    }
    footer {
      margin-top: 5em;
        background-color: #555;
        color: #bbb;
        line-height: 1.5;
    }
    footer a {
        text-decoration: none;
        color: #eee;
    }
    a:hover {
        text-decoration: underline;
    }
    .ft-title {
        color: #fff;
        font-family: ’Merriweather’, serif;
        font-size: 1.375rem;
        padding-bottom: 0.625rem;
    }
    .b ul a{
      color:  royalblue ;
      font-weight: bold;
    }
    .active{

    }

    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }
    .bg-dark{
      /* background-color: #1692BF !important; */
      /* background-color: #345d68 !important; */
      background-color: #e3714f !important;
    }


    .container {
        flex: 1;    /* same as flex-grow: 1; */
    }

    .ft-main {
        padding: 1.25rem 1.875rem;
        display: flex;
        flex-wrap: wrap;
        /* background-color: #005073; */
        background-color: darkslategray;
    }
    .ft-main-item {
        padding: 1.25rem;
        min-width: 12.5rem /*200px*/;
    }

    @media only screen and (min-width: 29.8125rem /*477px*/) {
        .ft-main {
            justify-content: space-around;

        }
    }
    @media only screen and (min-width: 77.5rem /*1240px*/ ) {
        .ft-main {
            justify-content: space-evenly;

        }
    }
     .one .nav-link{
       color:white !important;
     }
     #navbarDropdown1{
       color:white !important;
     }

    .fm {
        display: flex;
        flex-wrap: wrap;

    }
    #news {
        border: 0;
        padding: 0.625rem;
        margin-top: 0.3125rem;
    }
    input[type="submit"] {
        background-color: #00d188;
        color: #fff;
        cursor: pointer;
        border: 0;
        padding: 0.625rem 0.9375rem;
        margin-top: 0.3125rem;
    }

    .ft-social {
        padding: 0 1.875rem 0.85rem;
        /* background-color: #1692bf; */
        background-color: #2fa2a1;
    }
    .ft-social-list {
        display: flex;
        justify-content: center;
        border-top: 1px #777 solid;
        padding-top: 1.25rem;
    }
    .ft-social-list li {
        margin: 0.5rem;
        font-size: 1.25rem;
    }

    .ft-legal {
        padding: 0.9375rem 1.875rem;
        /* background-color: #03356b; */
        background-color: darkslategray;
    }
    .ft-legal-list {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .ft-legal-list li {
        margin: 0.125rem 0.625rem;
        white-space: nowrap;
    }
    /* one before the last child */
    .ft-legal-list li:nth-last-child(2) {
        flex: 1;       /* same as flex-grow: 1; */
    }

    </style>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand  " href="#">OCMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto one">
            <li  class="nav-item {{ Request::is('landing') ? 'active' : '' }}">

                <a class="nav-link" href= {{ url('/new') }}>Home</a>
            </li>
            <li class="nav-item {{ Request::is('therapists') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/therapists') }}>Therapists</a>
            </li>
            <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/posts') }}>Advices</a>
            </li>
            <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/Appointments') }}>Appointments</a>
            </li>




            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Drop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link"data-toggle="modal" data-target="#exampleModalCenter" href="">{{ __('Login') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('Therapist.login')}}">{{ __('Login as Therapist') }}</a>
                          </li>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle" align="center" >Log-in Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <form id= "login" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                          </div>
                          <div class="modal-footer">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link ml-auto f" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Log in</button>
                          </div>
                        </div>
                      </div>
                    </div>  </form>

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          @if(Auth::user()) {{ Auth::user()->name }} @else {{Auth::guard('therapist')->user()->name}} @endif <span class="caret"></span>
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
              @endguest
          </ul>
        </div>
      </div>
    </nav>
    @if(Auth::user()  )


        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <div class="container b">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
                  <a class="nav-link" href= {{ url('/posts') }}>All Posts</a>
                </li>
                <li class="nav-item {{ Request::is('myposts') ? 'active' : '' }}">
                  <a class="nav-link" href={{ url('/myposts') }}>My Posts</a>
                </li>
                <li class="nav-item {{ Request::is('posts/create') ? 'active' : '' }}">
                  <a class="nav-link" href= {{ url('/posts/create') }}>Create Post</a>
                </li>



                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>

            @endif



              </ul>
            </div>
          </div>
        </nav>
@include('inc.messages')


    <div class="container c mt-3">

    @yield('content')
    </div>


    <footer>
         <!-- Footer main -->
         <section class="ft-main">
           <div class="ft-main-item">
             <h2 class="ft-title">Connect</h2>
             <ul>
               <li><a href="{{route('login')}}">Login</a></li>
               <li><a href="{{ route('register') }}">Registration</a></li>
               <li><a href="#">Help</a></li>
             </ul>
           </div>
           <div class="ft-main-item">
             <h2 class="ft-title">Resources</h2>
             <ul>
               <li><a href="#">Docs</a></li>
               <li><a href=" {{ url('/posts') }}">Blog</a></li>
               <li><a href="#">eBooks</a></li>
               <li><a href="#">Webinars</a></li>
             </ul>
           </div>
           <div class="ft-main-item">
             <h2 class="ft-title">About Us</h2>
             <ul>

               <li><a href="#">Email</a></li>
               <li><a href="#">People</a></li>
             </ul>
           </div>
           <div class="ft-main-item">
             <h2 class="ft-title">Stay Updated</h2>
             <p>Subscribe to our newsletter to get our latest news.</p>
             <form id="fm">
               <input id="news" type="email" name="email" placeholder="Enter email address">
               <input type="submit" value="Subscribe">
             </form>
           </div>
         </section>

         <!-- Footer social -->
         <section class="ft-social">
           <ul class="ft-social-list">
             <li><a href="#"><i class="fab fa-facebook"></i></a></li>
             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
             <li><a href="#"><i class="fab fa-github"></i></a></li>
             <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
             <li><a href="#"><i class="fab fa-youtube"></i></a></li>
           </ul>
         </section>

         <!-- Footer legal -->
         <section class="ft-legal">
           <ul class="ft-legal-list">
             <li><a href="#">Terms &amp; Conditions</a></li>
             <li><a href="#">Privacy Policy</a></li>
             <li>&copy; 2019 Copyright Team Flingoo Inc.</li>
           </ul>
         </section>
       </footer>
       <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
       <script>
       CKEDITOR.replace( 'article-ckeditor' );
       </script>

  </body>
</html>
