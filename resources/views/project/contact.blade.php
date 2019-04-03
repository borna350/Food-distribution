<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/contact.html by HTTrack Website Copier/3.x [XR&CO'2005], Sat, 02 Jun 2018 09:31:28 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Foods distribution - Home One</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">


		<link rel="icon" type="image/png" href="favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		

		<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" />

		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/xsIcon.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/isotope.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
		

		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

	
		
		<link rel='stylesheet alternate' title='color-1' type='text/css' href="{{ asset('css/colors/color-1.css') }}" />
		<link rel='stylesheet alternate' title='color-2' type='text/css' href="{{ asset('css/colors/color-2.css') }}" />
		<link rel='stylesheet alternate' title='color-3' type='text/css' href="{{ asset('css/colors/color-3.css') }}" />
		<link rel='stylesheet alternate' title='color-4' type='text/css' href="{{ asset('css/colors/color-4.css') }}" />
		<link rel='stylesheet alternate' title='color-5' type='text/css' href="{{ asset('css/colors/color-5.css') }}" />
		<link rel='stylesheet alternate' title='color-6' type='text/css' href="{{ asset('css/colors/color-6.css') }}" />
        <link rel='stylesheet alternate' title='color-7' type='text/css' href="{{ asset('css/colors/color-7.css') }}" />
	</head>
	<body>
	
	

	<div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div><!-- #preloader -->

	<!-- demo color panel switch -->
	
<!-- header section -->
<header class="xs-header header-transparent" >
	
	<div class="container">

		<nav class="xs-menus">
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a href="{{  url('/index') }}" class="nav-logo">
					
					<img src="{{ asset('img/logo7.png') }}" alt="">
				</a>
			</div><!-- .nav-header END -->
			<div class="nav-menus-wrapper row">
				<div class="xs-logo-wraper col-lg-2 xs-padding-0">
					<a class="nav-brand" href="index.blade.php">
						<img src="{{ asset('img/logo7.png') }}" alt="">
					</a>
				</div><!-- .xs-logo-wraper END -->

				<div class="col-lg-7">
					<ul class="nav-menu">
						<li><a href="{{  url('/index') }}">Home</a>
							
						</li>

						<li><a href="{{  url('/about') }}">about</a></li>

						
						<li><a href="#">Pages</a>
							<ul class="nav-dropdown">
								<li><a href="{{  url('/donatenow') }}">Donate Food</a></li>
								<li><a href="{{  url('/volunteer') }}">volunteer</a></li>
							
							</ul>
						</li>
						<li><a href="{{  url('/contact') }}">Contact</a></li>
					</ul><!-- .nav-menu END -->
				</div>
				<div class="xs-navs-button d-flex-center-end col-lg-3">
					<a href="#" class="btn btn-primary">
						<span class="badge"><i class="fa fa-heart"></i></span> Donate Food
					</a>
				</div><!-- .xs-navs-button END -->
			</div><!-- .nav-menus-wrapper .row END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div><!-- .container end -->
</header><!-- End header section -->

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-banner-inner-section parallax-window" style="background-image:url(img/backgrounds/contact_bg.jpg);">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Contact Us</h2>
			<p>Give a helping hand for poor people</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="index.blade.php" class="color-white"> Home /</a> Contact</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->


<main class="xs-main">
	<!-- contact section -->
	<section class="xs-contact-section-v2">
	<div class="container">
		<div class="xs-contact-container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xs-contact-form-wraper">
						<h4>Drop us a line</h4>
						<form action="contact" method="post" enctype="multipart/form-data" id="volunteer-form" class="xs-volunteer-form">
						{{ csrf_field() }}

							<div class="row">
							<div class="col-lg-6">
								<input type="text" id="volunteer_name" name="name" class="form-control" placeholder="Your Name">
							</div>
							<div class="col-lg-6">
								<input type="email" id="volunteer_email" name="email" class="form-control" placeholder="Your Email">
							</div>
							
						</div><!-- .row end -->
						<textarea name="massage" id="massage" placeholder="Enter your message" cols="30" class="form-control" rows="10"></textarea>
						<button type="submit" class="btn btn-secondary">Send</button>
						</form><!-- .xs-contact-form #xs-contact-form END -->
					</div><!-- .xs-contact-form-wraper END -->
				</div>
				
			
			
			</div><!-- .row end -->
		</div><!-- .xs-contact-container END -->
	</div><!-- .container end -->
	<!-- contact details section -->
	<section class="xs-contact-details">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="xs-contact-details">
					<div class="xs-widnow-wraper">
						<div class="xs-window-top">
							<img src="assets/images/contact/contact-info-img-1.png" alt="">
						</div>
						<div class="xs-window-back">
							<div id="xs-multiple-map-1" class="xs-map"></div>
						</div>
						<div class="xs-window-nav">
							<a href="#" class="xs-window-opener">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<!-- xs-widnow-wraper -->
					<ul class="xs-unorder-list">
						<li><i class="fa fa-phone color-green"></i>+8801786514360</li>
						<li><i class="fa fa-envelope-o color-green"></i>fooddis@gmail.com</li>
						<li><i class="fa fa-map-marker color-green"></i>Sector 12, 09 Street,Uttora,Dhaka,Banglades.</li>
					</ul>
				</div>
				<!-- xs-contact-details -->
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="xs-contact-details">
					<div class="xs-widnow-wraper">
						<div class="xs-window-top">
							<img src="assets/images/contact/contact-info-img-2.png" alt="">
						</div>
						<div class="xs-window-back">
							<div id="xs-multiple-map-2" class="xs-map"></div>
						</div>
						<div class="xs-window-nav">
							<a href="#" class="xs-window-opener">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<!-- xs-widnow-wraper -->
					<ul class="xs-unorder-list">
						<li><i class="fa fa-phone color-green"></i>+8801786514360</li>
						<li><i class="fa fa-envelope-o color-green"></i>fooddis@gmail.com</li>
						<li><i class="fa fa-map-marker color-green"></i>Sector 12, 09 Street,Uttora,Dhaka,Banglades.</li>
					</ul>
				</div>
				<!-- xs-contact-details -->
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="xs-contact-details">
					<div class="xs-widnow-wraper">
						<div class="xs-window-top">
							<img src="assets/images/contact/contact-info-img-3.png" alt="">
						</div>
						<div class="xs-window-back">
							<div id="xs-multiple-map-3" class="xs-map"></div>
						</div>
						<div class="xs-window-nav">
							<a href="#" class="xs-window-opener">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<!-- xs-widnow-wraper -->
					<ul class="xs-unorder-list">
						<li><i class="fa fa-phone color-green"></i>+8801786514360</li>
						<li><i class="fa fa-envelope-o color-green"></i>fooddis@gmail.com</li>
						<li><i class="fa fa-map-marker color-green"></i>Sector 12, 09 Street,Uttora,Dhaka,Banglades.</li>
					</ul>
				</div>
				<!-- xs-contact-details -->
			</div>
		</div>
	</div>
</section>	<!-- End contact details section -->
</section>	<!-- End contact section -->
</main>

<!-- footer section start -->
		<footer class="xs-footer-section">
			<div class="container">
				<div class="xs-footer-top-layer">
					<div class="row">
						<div class="col-lg-3 col-md-6 footer-widget xs-pr-20">
							<a href="index.html" class="xs-footer-logo">

								<img src="{{ asset('imgfooter_logo.png') }}" alt="">
							</a>
							<p>Foods distribution online site and raise foods donation for charity,poor people,street children and causes you’re passionate about. Foods distribution is an innovative, cost-effective online site.</p>
							<ul class="xs-social-list-v2">
								<li><a href="#" class="color-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="color-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="color-dribbble"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#" class="color-pinterest"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- .xs-social-list END -->
						</div>
						<div class="col-lg-2 col-md-6 footer-widget">
							<h3 class="widget-title">About Us</h3>
							<ul class="xs-footer-list">
								<li><a href="index.html">About employee</a></li>
								<li><a href="#">How it works</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Press</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						
						<div class="col-lg-4 col-md-6 footer-widget">
							<h3 class="widget-title">Contact Us</h3>
							<ul class="xs-info-list">
								<li><i class="fa fa-home"></i>Sector 12, 09 Street,Uttora,Dhaka,Banglades.</li>
								<li><i class="fa fa-phone"></i>+88017669296,+8801623165169</li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:yourname@domain.com">fooddis@gmail.com</a></li>
							</ul><!-- .xs-list-with-icon END -->
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="xs-copyright">
					<div class="row">
						<div class="col-md-6">
							<div class="xs-copyright-text">
								<p>&copy; Copyright 2018 <a href="https://themeforest.net/user/xpeedstudio/portfolio">Foods distribution.</a> - All Right's Reserved</p>
							</div>
						</div>
						<div class="col-md-6">
							<nav class="xs-footer-menu">
								<ul>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Help Desk</a></li>
									<li><a href="#">Support</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="xs-back-to-top-wraper">
				<a href="#" class="xs-back-to-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</footer>	
		
		<script src="{{ asset('js/jquery-3.2.1.min.js') }}" /></script>
		<script src="{{ asset('/js/plugins.js') }}" /></script>
		<script src="{{ asset('js/bootstrap.min.js') }}" /></script>
		<script src="{{ asset('js/isotope.pkgd.min.js') }}" /></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" /></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}" /></script>
		<script src="{{ asset('js/jquery.waypoints.min.js') }}" /></script>
		<script src="{{ asset('js/jquery.countdown.min.js') }}" /></script>
		<script src="{{ asset('js/spectragram.min.js') }}" /></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>

		<script src="{{ asset('js/main.js') }}" /></script>		
	</body>

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/contact.html by HTTrack Website Copier/3.x [XR&CO'2005], Sat, 02 Jun 2018 09:31:28 GMT -->
</html>
<!-- footer section end -->