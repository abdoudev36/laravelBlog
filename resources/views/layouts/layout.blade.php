<!DOCTYPE html>
<html lang="en">
	<head>
        {{-- meta tags --}}
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="abdoudev, just about programming">

        {{-- favicons --}}
		<link rel="icon" href="{{ asset('/home/img/favicon/favicon.ico') }}">
		<link rel="icon" href="{{ asset('/home/img/favicon/android-chrome-192x192.png') }}">
		<link rel="icon" href="{{ asset('/home/img/favicon/android-chrome-512x512.png') }}">
        <link rel="icon" href="{{ asset('/home/img/favicon/app-touch-icon.png') }}">

        {{-- css files --}}
		<link rel="stylesheet" href="{{ asset('/home/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/home/css/app.css') }}">
		<title>@yield('title')</title>
	</head>
	<body>

		@yield('body')
		<!-- javascript files -->
		<script src="https://kit.fontawesome.com/0301398743.js" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
		<script src="{{ asset('/home/js/app.js') }}"></script>
	</body>
</html>
