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
		<link rel="stylesheet" href="{{ asset('/cpanel/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/cpanel/css/app.css') }}">
		<title>@yield('title')</title>
	</head>
	<body>
		{{-- main navbar --}}
		@include('cpanel.includes.navbar')
		@yield('body')
		<!-- javascript files -->
		<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
		<script src="https://kit.fontawesome.com/0301398743.js" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
		<script src="{{ asset('/cpanel/js/app.js') }}"></script>
		<script>
            CKEDITOR.replace( 'body' );
        </script>
	</body>
</html>
