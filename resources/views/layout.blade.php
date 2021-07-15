<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js sizes customelements history pointerevents webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers" >
<head>
        
	<style>.jquery-ripples { position: relative; z-index: 0; }</style>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content>
	<meta name="description" content="Servicios integrales de salud para todo tipo de clientes, ¡Conócenos!. Correo; {{ env('EMAIL') }}; Teléfono: {{ env('PHONE_NUMBER') }}. Copyright {{ Carbon\Carbon::now()->year }} Regia MediK." />
	<!-- Page Title -->
	<title>Regia Medi-K {{ isset($title) ? ' / '. $title : '' }} @yield('title')</title>

	<!-- Favicon Icon -->
	<link rel="icon" href="{{ asset('assets/images/regia-medik-heart-icon.png') }}">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/lightgallery.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jQueryUi.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/textRotate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

	@include('partials.navigation')

	@yield('content')

	@include('partials.footer')


	<!-- Template Scripts -->
	<script src="{{ asset('assets/js/modernizr-3.5.0.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('assets/js/isotope.pkg.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.slick.min.js') }}"></script>
	<script src="{{ asset('assets/js/mailchimp.min.js') }}"></script>
	<script src="{{ asset('assets/js/counter.min.js') }}"></script>
	<script src="{{ asset('assets/js/lightgallery.min.js') }}"></script>
	<script src="{{ asset('assets/js/ripples.min.js') }}"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/jQueryUi.js') }}"></script>
	<script src="{{ asset('assets/js/textRotate.min.js') }}"></script>
	<script src="{{ asset('assets/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/test.js') }}"></script>
	<script>
		const goToTopBtn = document.getElementById('st-backtotop')
		if (goToTopBtn) {
			goToTopBtn.addEventListener('click', () => {
				window.scrollY = 0
			})
		}
	</script>
	<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>

</body>
</html>
