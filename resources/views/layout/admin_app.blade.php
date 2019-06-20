<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('/css/fontawesome.css')}}">
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

#navbarDropdown{
  color: white;
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
  /* margin-top: 5em; */
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
    background-color: #005073;

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
/* input[type="email"] */

#news_email{
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
    background-color: #1692bf;
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
    background-color: #03356b;
}
.ft-legal-list {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    color:black !important;
    font-weight:bold;
}
.ft-legal-list li {
    margin: 0.125rem 0.625rem;
    white-space: nowrap;
    color:white !important;
    font-weight:bold;
}
.ft-legal-list li a {
  color:white !important;
  font-weight:bold;
}
/* one before the last child */
.ft-legal-list li:nth-last-child(2) {
    flex: 1;       /* same as flex-grow: 1; */
}























.bg-dark{
  background-color:#1692BF  !important;
}
.wrapper {
    display: flex;
    align-items: stretch;


}


#sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 70vh;
    background-color: #0a294a;

}

#sidebar.active {
    margin-left: -250px;

}

a[data-toggle="collapse"] {
    position: relative;
}

#sidebar .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }

}
.one .nav-link{
  color: white!important;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}
#AD{
  font-size: 22px;
  font-family: 'Nunito', sans-serif;
  font-weight: 500;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background:  #287594;
    color: #fff;
    transition: all 0.3s;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}
</style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">

        <a class="navbar-brand" href="#" id="sidebarCollapse">OCMS Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto one">
            <li class="nav-item {{ Request::is('landing') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/landing') }}>Home</a>
            </li>
            <li class="nav-item {{ Request::is('UserRole') ? 'active' : '' }}">
              <a class="nav-link" href= {{ Route('UserRole') }}>User Roles</a>
            </li>
            <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
              <a class="nav-link" href= {{ url('/posts') }}>Advices</a>
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


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>OCMS Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p id="AD">Admin Dashboard</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle active">User Roles</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{route("check_admins")}}">Admins</a>
                        </li>
                        <li>
                            <a href="{{route("check_therapists")}}">Therapists</a>
                        </li>
                        <li>
                            <a href="{{route("check_normalusers")}}">Normal Users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Blog</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{route('view_all')}}">View All</a>
                        </li>
                        <li>
                            <a href="#">Create</a>
                        </li>
                        <li>
                            <a href="#">Manage</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="container mt-5 mb-5 d">
        @include('inc.messages')
        @yield('content')
        </div>
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
               <input id = "news_email"type="email" name="email" placeholder="Enter email address">
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
       <script type="text/javascript">
       $(document).ready(function () {

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

});
       </script>
  </body>
</html>
