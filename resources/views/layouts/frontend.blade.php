<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{config('sekolah.title')}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{asset('frontend/images/smkn5.png')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{asset('assets')}}/vendor/linearicons/style.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{asset('frontend')}}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<i class="icon-facebook" style="color: white;"></i> &nbsp;
							<i class="icon-instagram" style="color: white;"></i> &nbsp;
							<i class="icon-youtube" style="color: white;"></i>
						</div>
						<div class="col-xs-6 col-md-push-2 text-right">
							<p class="btn-apply">+62727347567 &nbsp; &nbsp; smkn5bandung@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div id="colorlib-logo"><img src="{{asset('frontend/images/smkn5.png')}}" width="70" /></div>
						</div>
						<div class="col-md-9 text-right menu-1">
							<ul>
								<li class="{{ Request::is('/') ? 'bg-primary' : ''}}"><a  href="{{url('/')}}"><b>Home</b></a></li>
								<li class="{{ Request::is('guru') ? 'bg-primary' : ''}}"><a  href="{{url('/guru')}}"><b>Guru</b></a></li>
								<li class="{{ Request::is('article*') ? 'bg-primary' : ''}}"><a href="{{url('/article')}}"><b>Article</b></a></li>
								<li class="{{ Request::is('event*') ? 'bg-primary' : ''}}"><a href="{{url('/event')}}"><b>Events</b></a></li>
								<li class="active"><a href="{{url('/login')}}"><b>Masuk</b></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		@yield('content')
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Programs</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Diploma Degree</a></li>
								<li><a href="#"><i class="icon-check"></i> BS Degree</a></li>
								<li><a href="#"><i class="icon-check"></i> Beginner</a></li>
								<li><a href="#"><i class="icon-check"></i> Intermediate</a></li>
								<li><a href="#"><i class="icon-check"></i> Advance</a></li>
								<li><a href="#"><i class="icon-check"></i> Difficulty</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Useful Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> About Us</a></li>
								<li><a href="#"><i class="icon-check"></i> Testimonials</a></li>
								<li><a href="#"><i class="icon-check"></i> Courses</a></li>
								<li><a href="#"><i class="icon-check"></i> Event</a></li>
								<li><a href="#"><i class="icon-check"></i> News</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-2 colorlib-widget">
						<h4>Support</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Documentation</a></li>
								<li><a href="#"><i class="icon-check"></i> Forums</a></li>
								<li><a href="#"><i class="icon-check"></i> Help &amp; Support</a></li>
								<li><a href="#"><i class="icon-check"></i> Scholarship</a></li>
								<li><a href="#"><i class="icon-check"></i> Student Transport</a></li>
								<li><a href="#"><i class="icon-check"></i> Release Status</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Post</h4>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(/frontend/images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(/frontend/images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="https://colorlib.com" target="_blank">Teguhhh</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('frontend')}}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend')}}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend')}}/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('frontend')}}/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend')}}/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="j{{asset('frontend')}}/s/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('frontend')}}/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="{{asset('frontend')}}/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="{{asset('frontend')}}/js/main.js"></script>

	</body>
</html>

