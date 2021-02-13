<aside class="aside-section">

	<!-- search bar -->
	<form action="{{ route('search-post') }}" method="POST" class="search-form bg-white p-3 shadow-sm d-flex align-items-center">
		@csrf
		
		<input type="text" name="s" placeholder="Search" class="form-control rounded-0">
		<button class="btn rounded-0 text-capitalize d-flex align-items-center justify-content-center">
			<i class="fas fa-search"></i>
		</button>
	</form>

	<!-- category section -->
	<div class="category mt-4 bg-white shadow-sm p-3">
		<!-- text intro -->
		<h3 class="text-uppercase d-flex align-items-center mb-3">
			<span class="icon me-2"><i class="far fa-folder"></i></span>
			<span>categories</span>
		</h3>
		<div class="cats d-flex flex-column justify-content-center">
			@foreach ($cats as $cat)
			<a href="{{ route('search-post-by-cats', ['cat' => $cat->category]) }}" class="cat-link d-flex align-items-center text-capitalize text-decoration-none">{{ $cat->category }}</a>
			@endforeach
		</div>
	</div>

	<!-- recent posts 
	<div class="recent-posts mt-4 bg-white shadow-sm p-3">

		<h3 class="text-uppercase d-flex align-items-center mb-3">
			<span class="icon me-2"><i class="far fa-newspaper"></i></span>
			<span>latest news</span>
		</h3>

		<div class="links">
			<a href="" class="post-link mb-3 d-block text-capitalize text-decoration-none">how to get alot of moeny from youtube</a>
		</div>
	</div> -->
</aside>