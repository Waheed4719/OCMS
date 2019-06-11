<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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








/* * {
    box-sizing: border-box;
    font-family: ’Lato’, sans-serif;
    margin: 0;
    padding: 0;
} */
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
  color: royal blue ;
  font-weight: bold;
}

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}
.container {
    flex: 1;    /* same as flex-grow: 1; */
}

.ft-main {
    padding: 1.25rem 1.875rem;
    display: flex;
    flex-wrap: wrap;
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


.fm {
    display: flex;
    flex-wrap: wrap;
}
input[type="email"] {
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
    padding: 0 1.875rem 1.25rem;
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
    background-color: #333;
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
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('landing') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/landing') }}>Home</a>
            </li>
            <li class="nav-item {{ Request::is('therapists') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/therapists') }}>Therapists</a>
            </li>
            <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/posts') }}>Posts</a>
            </li>
            <li class="nav-item {{ Request::is('posts/create') ? 'active' : '' }}">
              <a class="nav-link" href={{ url('/posts/create') }}>Create Post</a>
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
                  <li class="nav-item dropdown">
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
              @endguest
          </ul>
        </div>
      </div>
    </nav>
  
            </ul>
          </div>
        </div>
      </nav>
    @else

    @endif

    <div class="container c mt-3">
    @include('inc.messages')
    @yield('content')
    </div>


    <footer>
         <!-- Footer main -->
         <section class="ft-main">
           <div class="ft-main-item">
             <h2 class="ft-title">About</h2>
             <ul>
               <li><a href="#">Services</a></li>
               <li><a href="#">Portfolio</a></li>
               <li><a href="#">Pricing</a></li>
               <li><a href="#">Customers</a></li>
               <li><a href="#">Careers</a></li>
             </ul>
           </div>
           <div class="ft-main-item">
             <h2 class="ft-title">Resources</h2>
             <ul>
               <li><a href="#">Docs</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">eBooks</a></li>
               <li><a href="#">Webinars</a></li>
             </ul>
           </div>
           <div class="ft-main-item">
             <h2 class="ft-title">Contact</h2>
             <ul>
               <li><a href="#">Help</a></li>
               <li><a href="#">Sales</a></li>
               <li><a href="#">Advertise</a></li>
             </ul>
           </div>
           <div class="ft-main-item">
             <h2 class="ft-title">Stay Updated</h2>
             <p>Subscribe to our newsletter to get our latest news.</p>
             <form id="fm">
               <input type="email" name="email" placeholder="Enter email address">
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
             <li>&copy; 2019 Copyright Nowrap Inc.</li>
           </ul>
         </section>
       </footer>
  </body>
</html>
