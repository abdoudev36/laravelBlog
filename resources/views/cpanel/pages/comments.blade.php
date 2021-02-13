@extends('layouts.cpanel')

@section('title') Comments @endsection

@section('body')
	<section class="comments-page">
		<div class="container">
			
			{{-- comment --}}
			<div class="comment bg-white shadow-sm">
				<!-- bottom info -->
				<div class="info d-flex flex-column justify-content-center">
					<!-- date -->
					<div class="date d-flex align-items-center">
						<span class="icon me-2"><i class="far fa-calendar-alt"></i></span>
						<span class="text-capitalize">15 june, 2021</span>
					</div>
					<!-- author -->
					<div class="author d-flex align-items-center mt-3">
						<span class="icon me-2"><i class="far fa-user"></i></span>
						<span class="text-capitalize">commented by : abdou ramadan</span>
					</div>
				</div>
				<!-- comment body -->
				<div class="body mt-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing, 
						elit. Dolorem molestias neque odit adipisci sint, 
						voluptate quidem ipsum eius maiores nesciunt.
					</p>
				</div>
				<!-- actions -->
				<div class="actions d-flex align-items-center pt-3 mt-3 border-top">
					{{-- read --}}
					<a href="" class="read-more text-capitalize d-flex align-items-center justify-content-center text-decoration-none">read</a>

					{{-- update --}}
					<a href="" class="update text-capitalize d-flex align-items-center justify-content-center text-decoration-none mx-2">prove</a>

					{{-- delete --}}
					<form action="" class="delete-form">
						<button class="btn text-capitalize d-flex align-items-center justify-content-center">delete</button>
					</form>
				</div>
			</div>

		</div>
	</section>
@endsection