<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
	<meta name="title" content="Regia Medi-K, Te invitamos a conocer nuestra amplia gama de servicios.">
	<meta name="description" content="Productos y servicios médicos">
	<meta name="keywords" content="Regia Medi-K, Regia MediK, Medicamentos, Suministros Médicos, Medicinas, Insumos, Hospital, Farmacia">
	<meta name="author" content="Valtre" />
	<meta property="og:title" content="Regia Medi-K, te invitamos a conocer nuestra amplia gama de servicios" />
	<!-- Title -->
	<title> Regia Medi-K @yield('title')</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/heart-icon.png') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('img/heart-logo.png') }}">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
	<!-- Plugins css -->
	<link rel="stylesheet" href="{{ asset('theme/css/plugins.css') }}">
	<!-- Style Css -->
	<link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset('theme/css/custom.css') }}">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="template-color-51 font-style-7">
	<!-- Wrapper -->
	<div id="wrapper" class="wrapper">
		<!-- Header start -->
		<header class="header-full-menu health-care-header wow fadeInDown header-container">
			<div class="inner-header">
				<!--colored-lines-->
				<div class="color-lines row no-gutters">
					<div class="col-4 bg-red"></div>
					<div class="col-4 bg-purple"></div>
					<div class="col-4 bg-green"></div>
				</div>
				<!--upper-nav-->
				<div class="upper-nav">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<ul class="top-personal-info">
									<li><a><i class="fa fa-phone text-color"></i> 811 415 20 18</a></li>
									<li><a href="mailto:info@regiamedik.com"><i class="fa fa-envelope text-color"></i> info@regiamedik.com</a></li>
								</ul>
							</div>
							<div class="col-6 text-right">
								<ul class="top-social-links">
									<li><a href="#" class="link-holder fb"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#" class="link-holder twit"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" class="link-holder link-in"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#" class="link-holder insta"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--main nav-->
				<div class="main-navigation py-3">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-5 col-lg-2">
								<a class="navbar-brand simple-nav-logo" href="{{ route('index') }}">
									<img src="{{ asset('img/full-logo.png') }}" alt="logo">
								</a>
								<a class="navbar-brand fixed-nav-logo" href="{{ route('index') }}">
									<img src="{{ asset('img/full-logo.png') }}" alt="logo">
								</a>
							</div>
							<div class="col-7 col-lg-10 simple-navbar">
								<nav class="navbar navbar-expand-lg">
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav ml-auto">
											<li class="nav-item active">
												<a class="nav-link text-uppercase home" href="#inicio">INICIO</a>
											</li>
											<li class="nav-item active">
												<a class="nav-link text-uppercase home" href="#inicio">SERVICIOS</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-uppercase scroll" href="#contacto">CONTACTO</a>
											</li>
										</ul>
									</div>
								</nav>
								{{-- <ul class="top-social-links fixed-nav-links">
									<li><a href="#" class="link-holder fb"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#" class="link-holder twit"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" class="link-holder link-in"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#" class="link-holder insta"><i class="fab fa-instagram"></i></a></li>
								</ul> --}}
							</div>
						</div>
					</div>
				</div>
				<!--toggle btn-->
				{{-- <a href="javascript:void(0)" class="full-menu-toggler" id="sidemenu_toggle">
					<span></span>
					<span></span>
					<span></span>
				</a> --}}
			</div>
			<!--Side Nav-->
			{{-- <div class="side-menu hidden side-menu-opacity">
					<div class="grad-bg-19 position-absolute top-0 left-0 right-0 bottom-0" data-opacity=".8"></div>
					<div class="inner-wrapper">
							<span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
							<div class="container">
									<div class="row w-100 side-menu-inner-content">
											<div class="col-12 d-flex justify-content-center align-items-center">
													<a href="index.html" class="navbar-brand"><img src="img/logo/logo-white.svg" alt="logo"></a>
											</div>
											<div class="col-12 col-lg-8">
													<nav class="side-nav w-100">
															<ul class="navbar-nav">
																	<li class="nav-item active"><a class="nav-link text-uppercase home" href="#home">HOME</a></li>
																	<li class="nav-item"><a class="nav-link text-uppercase scroll" href="#about-sec">ABOUT</a></li>
																	<li class="nav-item"><a class="nav-link text-uppercase scroll" href="#What-we-do-sec">What we do</a></li>
																	<li class="nav-item"><a class="nav-link text-uppercase scroll" href="#team-sec">Team</a></li>
																	<li class="nav-item"><a class="nav-link text-uppercase scroll" href="#newsupdate">News & Updates</a></li>
																	<li class="nav-item"><a class="nav-link text-uppercase scroll" href="#contact-sec">CONTACT</a></li>
															</ul>
													</nav>
											</div>
											<div class="col-12 col-lg-4 d-flex align-items-center">
													<div class="side-footer text-white w-100">
															<div class="menu-company-details text-center text-md-left mb-25">
																	<span class="font-size-20">+1 631 123 4567</span>
																	<span class="font-size-20">email@website.com</span>
															</div>
															<ul class="social-icons-simple text-center text-md-left mb-25">
																	<li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
																	<li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
																	<li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
																	<li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
															</ul>
															<p class="text-white text-center text-md-left">&copy; 2020 Snail. Made With Love by Chetsapp</p>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<a id="close_side_menu" href="javascript:void(0);"></a> --}}
		</header>
		<!-- Header end -->

		<!-- Main content start -->
		<main class="page-content">
				
			@yield('content')

			<!-- footer part Start -->
			<footer class="footer-part footer-classic footer-container">
				<div class="inner ptb-60 basic-thine-line">
					<div class="container">
						<div class="row text-left justify-content-center align-items-center">
							<div class="col-md-6 col-lg-4">
								<img src="{{ asset('img/full-logo.png') }}" class="wow fadeInUp footer-logo" alt="multipurpose logo">
								<p class="footer-links mt-3 wow fadeInUp">
									<a href="#inicio" class="link-1">Inicio</a>
									<a href="#servicios">Servicios</a>
									<a href="#contacto">Contacto</a>
								</p>
								<ul class="social-icon liquid-animate theme-color icon-size-small text-left mt-20 wow fadeInUp">
									<li class="facebook"><a href="#" class="link rounded-0" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
									<li class="twitter"><a href="#" class="link rounded-0" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="instagram"><a href="#" class="link rounded-0" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
									<li class="dribbble"><a href="#" class="link rounded-0" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a></li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-4 mt-30 mt-lg-0">
								{{-- <div class="contact-mata wow fadeInUp">
									<i class="fa fa-map-marker"></i>
									<p>4269 Jefferson Street <br />- Accomack, Virginia</p>
								</div> --}}
								<div class="contact-mata wow fadeInUp">
									<i class="fa fa-phone"></i>
									<p>811 415 20 18</p>
								</div>
								<div class="contact-mata wow fadeInUp">
									<i class="fa fa-envelope"></i>
									<p><a href="mailto:info@regiamedik.com">info@regiamedik.com</a></p>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 mt-30 mt-lg-0 text-left text-md-center text-lg-left wow fadeInUp">
								<h3>Acerca de nosotros</h3>
								<p>Somos una empresa regio-montana que nace por la necesidad de contar con una alternativa diferente en soluciones integrales de salud.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="footer-copyright">
						<div class="copyright py-3 wow fadeInUp">
							<p class="text-center text-white-50 mb-0">&copy; {{ Carbon\Carbon::now()->year }} Design By Valtre</p>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer part end -->
		</main>
		<!-- Main content end -->
		<!-- Scroll to top -->
		<a href="#" id="scroll-top" class="scroll-top show" aria-label="Arrow Up">
			<i class="ti-arrow-up"></i>
		</a>
	</div><!-- Wrapper end -->
	<!-- jquery -->
	<script src="{{ asset('theme/js/jquery.min.js') }}"></scr0ipt>
	<!-- Plugins js -->
	<script src="{{ asset('theme/js/plugins.js') }}"></script>
	<!-- custom js -->
	<script src="{{ asset('theme/js/custom.js') }}"></script>
	<!-- script js -->
	<script src="{{ asset('theme/js/script.js') }}"></script>
</body>

</html>