<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/style_profile.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>




</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="home-two-style">
		<!-- Header section start -->
		<header class="header-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 header-buttons">
            @if(Auth::guard('therapist')->check())
	             <a href="#" class="site-btn">Edit Profile</a>
               <a href="{{url('/therapist/profile/Appointments')}}" class="site-btn">Appointments</a>
             @endif

						<a href="{{ url('/posts') }}" class="site-btn">Advices</a>

						<a href="{{ route('logout') }}" class="site-btn" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">Logout</a>
					
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
						</form>
					</div>
				</div>
			</div>
		</header>
		<!-- Header section end -->

		<!-- Hero section start -->
		<section class="hero-section spad" >
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-10 offset-xl-1">
						<div class="row">
							<div class="col-lg-6">
								<div class="hero-text">
                    									<h2>{{Auth::guard('therapist')->user()->name}}</h2>

									<p>I’m a digital therapist who loves to help the people in need.</p>
								</div>
								<div class="hero-info">
									<h2>General Info</h2>
									<ul>
										<li><span>Date of Birth</span>Aug 25, 1988</li>
										<li><span>Address</span>Rosia Road 55, Gibraltar, UK</li>
										<li><span>E-mail</span>{{Auth::guard('therapist')->user()->email}}</li>
										<li><span>Phone </span>+43 5266 22 345</li>
											<li><span>Specialities </span>{{Auth::guard('therapist')->user()->speciality}},</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 text-md-center">
								<figure class="hero-image">
								<img src="/storage/therapists/images/{{Auth::guard('therapist')->user()->image}}" alt="5">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero section end -->

		<!-- Social links section start -->
		<div class="social-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-10 offset-xl-1">
						<div class="social-link-warp">
							<div class="social-links">
								<a href=""><i class="fa fa-pinterest"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
								<a href=""><i class="fa fa-instagram"></i></a>
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
							</div>
							<h2 class="hidden-md hidden-sm">My Social Profiles</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Social links section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
