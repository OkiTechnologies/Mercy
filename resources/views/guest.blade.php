<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title inertia>{{ config('app.name', 'Laravel') }}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />

	<!-- Styles -->
	<link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/animate.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/owl.theme.default.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/fonts.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/reset.css" />
	<link rel="stylesheet" type="text/css" href={{ asset('guest') }}/css/style2.css" />

	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />

</head>

<body class="font-sans antialiased">
	@inertia


	<!-- Scripts -->
	@routes
	<script src="{{ mix('assets/js/app.js') }}" defer></script>

	<!-- JS -->
	<script type="text/javascript" src={{ asset('guest') }}/js/jquery_min.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/bootstrap.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/jquery.menu-aim.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/owl.carousel.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/jquery.shuffle.min.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/modernizr.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/jquery.countTo.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/jquery.inview.min.js"></script>
	<script type="text/javascript" src={{ asset('guest') }}/js/custom2.js"></script>

	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>
	@env ('local')
	<script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
	@endenv
</body>

</html>