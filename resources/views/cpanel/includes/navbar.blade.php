{{-- navbar --}}
<nav class="main-navbar shadow-sm bg-white">
	<div class="container h-100 d-flex align-items-center justify-content-between">
		{{-- logo --}}
		<a href="{{ route('cpanel') }}" class="logo h-100 text-uppercase d-flex align-items-center justify-content-center text-decoration-none">abdev</a>

		{{-- navbar list --}}
		<ul class="navbar-list d-flex align-items-center m-0 h-100">
			<a href="{{ route('cpanel') }}" class="{{ Request::routeIs('cpanel') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">dashboard</a>
			<a href="{{ route('home') }}" class="nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">home</a>
			<a href="{{ route('cpanel-create') }}" class="{{ Request::routeIs('cpanel-create') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">create</a>
			<a href="{{ route('cpanel-posts') }}" class="{{ Request::routeIs('cpanel-posts') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">posts</a>
			<a href="{{ route('cpanel-categories') }}" class="{{ Request::routeIs('cpanel-categories') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">categories</a>
			<a href="{{ route('cpanel-comments') }}" class="{{ Request::routeIs('cpanel-comments') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">comments</a>
			<a href="{{ route('cpanel-messages') }}" class="{{ Request::routeIs('cpanel-messages') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">messages</a>
			<a href="{{ route('cpanel-profile') }}" class="{{ Request::routeIs('cpanel-profile') ? 'active' : '' }} nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">profile</a>
			{{-- <form action="" method="POST">
				@csrf
				<button class="nav-link btn text-capitalize">logout</button>
			</form> --}}
			<a href="{{ route('logout') }}" class="nav-link h-100 d-flex align-items-center justify-content-center text-capitalize text-decoration-none">logout</a>
		</ul>

		{{-- navbar bars --}}
		<div class="navbar-bars">
			<i class="fas fa-bars"></i>
		</div>

	</div>
</nav>