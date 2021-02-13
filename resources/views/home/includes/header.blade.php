<!-- header -->
<header class="main-header">

	<!-- top text -->
	<div class="top-text bg-white py-5 border-bottom">
		<div class="container d-flex flex-column align-items-center justify-content-center">
			<h2 class="text-uppercase">abdou dev blog</h2>
			<h3 class="text-capitalize mt-3">just about programming</h3>

			<!-- social links -->
			<div class="social-links mt-3 d-flex align-items-center justify-content-center">
				<a href="" class="link d-flex align-content-around justify-content-center"><i class="fab fa-facebook"></i></a>
				<a href="" class="link d-flex align-content-around justify-content-center"><i class="fab fa-twitter"></i></a>
				<a href="" class="link d-flex align-content-around justify-content-center"><i class="fab fa-youtube"></i></a>
				<a href="" class="link d-flex align-content-around justify-content-center"><i class="fab fa-github"></i></a>
			</div>
		</div>
	</div>

	<!-- navbar -->
	<nav class="main-navbar border-bottom shadow-sm bg-white">
		<div class="container d-flex align-items-center justify-content-center">
			<!-- navbar list -->
			<ul class="navbar-list m-0 d-flex align-items-center justify-content-center">
				<a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }} link d-flex align-items-center justify-content-center text-capitalize text-decoration-none">home</a>
				<a href="" class="link d-flex align-items-center justify-content-center text-capitalize text-decoration-none">about</a>
				<a href="" class="link d-flex align-items-center justify-content-center text-capitalize text-decoration-none">contact</a>
			</ul>
		</div>
	</nav>
</header>