@extends('layouts.layout')
@section('title') Abdou Dev @endsection

@section('body')

{{-- header --}}
@include('home.includes.header')

<!-- content wrapper -->
<section class="content-wrapper">
	<div class="container d-flex justify-content-between flex-wrap">

		<!-- posts section -->
		<div class="posts-section post-page">

			<!-- post -->
			<article class="post bg-white shadow-sm text-decoration-none d-flex flex-column justify-content-center">

				<!-- post title -->
				<h3 class="title text-uppercase p-0 m-0 mt-4"> {{ $post->title }} </h3>

				<!-- bottom info -->
				<div class="info d-flex align-items-center mt-3">
					<!-- date -->
					<div class="date d-flex align-items-center me-3">
						<span class="icon me-2"><i class="far fa-calendar-alt"></i></span>
						<span class="text-capitalize">{{ $post->created_at->diffForHumans() }}</span>
					</div>
					<!-- author -->
					<div class="author d-flex align-items-center">
						<span class="icon me-2"><i class="far fa-user"></i></span>
						<span class="text-capitalize">by {{ $post->author }}</span>
					</div>
				</div>

				<!-- post body -->
				<div class="body mt-4">{!! $post->body !!}</div>
			</article>
		</div>

		<!-- aside section -->
		@include('home.includes.aside', ['cats' => $cats])
	</div>
</section>

{{-- footer --}}
@include('home.includes.footer')

@endsection
