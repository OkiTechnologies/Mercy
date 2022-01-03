<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<title inertia>{{ config('app.name', 'Laravel') }}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">
</head>

<body class="font-sans antialiased">
	@inertia


	<!-- Scripts -->
	@routes
	<script src="{{ mix('assets/js/app.js') }}" defer></script>

	@env ('local')
	<script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
	@endenv
</body>

</html>