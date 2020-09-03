<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Pemodule</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	</head>
	<body>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<a href="/"><img src="{{ asset('img/logo.png') }}" alt="" style="width: 50px;"></a>
								</div>
								<div class="main-menubar d-flex align-items-center">
									<nav class="hide">
										<a href="/">Accueil</a>
                                        <a href="images">Gallerie</a>
                                        @if (Route::has('login'))
                                            @if (Auth::check())
                                                <a href="{{ url('/home') }}">Mon compte</a>
                                            @else
                                                <a href="{{ url('/login') }}">Se connecter</a>
                                                <a href="{{ url('/register') }}">Créer un compte</a>
                                            @endif
                                        @endif
									</nav>
									<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="banner-area">
					<div class="overlay overlay-bg"></div>
					<div class="container">
						<div class="row height align-items-center justify-content-center">
							<div class="col-lg-7">
								<div class="banner-content text-center">
									<h4 class="text-uppercase">N°1 en hebergement photo</h4>
									<h1>PhotoShare</h1>
									<a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Commencer</span><span class="lnr lnr-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<!-- Start Feature Area -->
			<section class="featured-area pt-100 pb-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="feature-left">
								<h2>
									Pourquoi Choisir <br>
									<span>Notre</span> Service
								</h2>
								<p>
									Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
								</p>
								<button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">C'est partie !</span><span class="lnr lnr-arrow-right"></span></button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="feature-right active-feature-carousel">
								<div class="single-slider item">
									<img src="img/slider.jpg" alt="">
								</div>
								<div class="single-slider item">
									<img src="img/slider.jpg" alt="">
								</div>
								<div class="single-slider item">
									<img src="img/slider.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Feature Area -->

			<!-- Start service Area -->
			<section class="service-area">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s1.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s2.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s3.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single-service" style="background: url(img/s4.jpg);">
								<div class="overlay overlay-content">
									<h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->

			<!-- Start footer Area -->
			<footer class="footer-area relative">
				<div class="container">
					<div class="footer-content d-flex flex-column align-items-center">
						<div class="footer-menu">
							<a href="/">Accueil</a>
							<a href="images">Gallerie</a>
							<a href="login">Se connecter</a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
		</div>




		<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/parallax.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>
