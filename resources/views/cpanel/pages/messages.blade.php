@extends('layouts.cpanel')

@section('title') Messages @endsection

@section('body')
	<section class="messages-page">
		<div class="container">
			
			{{-- message --}}
			<div class="message bg-white shadow-sm">
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
						<span class="text-capitalize">message from : abdou ramadan</span>
					</div>
					<!-- subject -->
					<div class="subject d-flex align-items-center mt-3">
						<span class="icon me-2"><i class="fas fa-pen"></i></span>
						<span class="text-capitalize">subject : i need help</span>
					</div>
					<!-- email -->
					<div class="subject d-flex align-items-center mt-3">
						<span class="icon me-2"><i class="fas fa-envelope"></i></span>
						<span class="text-capitalize">email : someone@email.com</span>
					</div>
				</div>
				<!-- message body -->
				<div class="body mt-4 pt-4 border-top">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing, 
						elit. Dolorem molestias neque odit adipisci sint, 
						voluptate quidem ipsum eius maiores nesciunt.
					</p>
				</div>
				<!-- actions -->
				<div class="actions d-flex align-items-center pt-4 mt-4 border-top">
					{{-- update --}}
					<a href="" class="reply text-capitalize d-flex align-items-center justify-content-center text-decoration-none mx-2">reply</a>

					{{-- delete --}}
					<form action="" class="delete-form">
						<button class="btn text-capitalize d-flex align-items-center justify-content-center">delete</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection