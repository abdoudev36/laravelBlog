@extends('layouts.cpanel')

@section('title') Posts @endsection

@section('body')
	<section class="posts-page">
		<div class="container">
			
			@if (session()->has('success'))
			<div class="alert alert-success text-capitalize rounded-0 mb-3 text-capitalize">{{ session()->get('success') }}</div>
			@endif

			@foreach ($posts as $post)
			<article class="post bg-white shadow-sm">
				<!-- top info -->
				<div class="info d-flex align-items-center mb-3">
					<!-- date -->
					<div class="date d-flex align-items-center">
						<span class="icon me-2"><i class="far fa-calendar-alt"></i></span>
						<span class="text-capitalize">{{ $post->created_at->diffForHumans() }}</span>
					</div>
					<!-- category -->
					<a href="" class="category d-flex align-items-center ms-3 text-decoration-none ">
						<span class="icon me-2"><i class="far fa-folder"></i></span>
						<span class="text-capitalize">{{ $post->post_category }}</span>
					</a>
				</div>

				<!-- post title -->
				<h3 class="title text-uppercase p-0 m-0">
					<a href="" class="text-decoration-none">{{ $post->title }}</a>
				</h3>

				<!-- bottom info -->
				<div class="info d-flex align-items-center mt-3">
					<!-- author -->
					<div class="author d-flex align-items-center">
						<span class="icon me-2"><i class="far fa-user"></i></span>
						<span class="text-capitalize">by {{ $post->author }}</span>
					</div>
				</div>

				<!-- read more link -->
				<div class="actions d-flex align-items-center mt-3">
					{{-- read --}}
					<a href="" class="read-more text-capitalize d-flex align-items-center justify-content-center text-decoration-none">read</a>

					{{-- update --}}
					<a href="{{ route('cpanel-posts-update', ['id' => $post->id]) }}" class="update text-capitalize d-flex align-items-center justify-content-center text-decoration-none mx-2">update</a>

					{{-- delete --}}
					<form action="{{ route('cpanel-posts-delete', ['id' => $post->id]) }}" method="POST" class="delete-form">
						@method('DELETE')
						@csrf
						
						<button class="btn text-capitalize d-flex align-items-center justify-content-center">delete</button>
					</form>
				</div>
			</article>
			@endforeach

			@if ($posts->count() <= 0)
			<div class="alert alert-info text-capitalize rounded-0">no posts are found ...</div>
			@endif
		</div>
	</section>
@endsection