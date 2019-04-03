<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/donate-now.html by HTTrack Website Copier/3.x [XR&CO'2005], Sat, 02 Jun 2018 09:31:25 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Foods distribution - Donate Now</title>
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
<section class="xs-banner-inner-section parallax-window" style="background-image:url(img/donation.jpg);">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Donate Now</h2>
			<p>Give a helping hand for poor people</p>
			<ul class="xs-breadcumb">
				<li class="badge badge-pill badge-primary"><a href="{{  url('/index') }}" class="color-white"> Home /</a> Donate</li>
			</ul>
		</div>
	</div>
</section>
<!--breadcumb end here--><!-- End welcome section -->

<main class="xs-main">
	<section class="xs-section-padding bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="xs-donation-form-images">
					<img src="{{asset('/img/donation.jpg') }}" class="img-responsive" alt="Family Images">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="xs-donation-form-wraper" >
					<div class="xs-heading xs-mb-30">
						<h2 class="xs-title">Make a donation</h2>
						<p class="small">To learn more about make donate food with us visit our "<span class="color-green">Contact us</span>" site. By calling <span class="color-green">+8801786516350</span>.</p>
						<span class="xs-separetor v2"></span>
					</div><!-- .xs-heading end -->
					<form action="donatenow" method="POST" enctype="multipart/form-data" id="xs-donation-form" class="xs-donation-form" > 
						 {{ csrf_field() }}
						<div class="xs-input-group">
							<label for="xs-donate-name">Donor Name <span class="color-light-red">**</span></label>
							<input type="text" name="dname" id="xs-donate-name" class="form-control" placeholder="Enter donor name">
						</div><!-- .xs-input-group END -->
						<div class="xs-input-group">
							<label for="xs-donate-name">Donor Email <span class="color-light-red">**</span></label>
							<input type="email" name="demail" id="xs-donate-name" class="form-control" placeholder="Enter donor email">
						</div>
						<div class="xs-input-group">
							<label for="xs-donate-name">Donation Amount <span class="color-light-red">**</span></label>
							<input type="text" name="dammount" id="xs-donate-name" class="form-control" placeholder="Minimum of 50 packets">
						</div>
						<div class="xs-input-group">
							<label for="xs-donate-name">Donor Location <span class="color-light-red">**</span></label>
							<input type="text" name="dlocation" id="xs-donate-name" class="form-control" placeholder="Enter location">
						</div>
						
						<div class="xs-input-group">
							<label for="xs-donate-charity">Food Type <span class="color-light-red" >**</span></label>
							<select name="cname" id="xs-donate-charity" class="form-control">
								<option value="">Select</option>
								<option value="Rice">Rice</option>
								<option value="Biriyani">Biriyani</option>
								<option value="Others">Others</option>
							</select>
						</div><!-- .xs-input-group END -->

						<div class="xs-input-group">
							<label for="xs-donate-name">Message <span class="color-light-red">**</span></label>
							<textarea type="text" name="dmessage" id="xs-donate-name" class="form-control" placeholder="Enter your message" cols="30" rows="10"></textarea>
						</div>

						<button type="submit" class="btn btn-warning"><span class="badge"><i class="fa fa-heart"></i></span> Donate Food</button>
					</form><!-- .xs-donation-form #xs-donation-form END -->
				</div>
			</div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</section>	<!-- End donation form section -->
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

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/donate-now.html by HTTrack Website Copier/3.x [XR&CO'2005], Sat, 02 Jun 2018 09:31:25 GMT -->
</html>
<!-- footer section end -->