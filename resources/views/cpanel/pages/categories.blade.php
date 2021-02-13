@extends('layouts.cpanel')

@section('title') Create @endsection

@section('body')
	<section class="categories-page">
		<div class="container">

			@if (session()->has('success'))
			<div class="alert alert-success text-capitalize rounded-0 mb-3 text-capitalize">{{ session()->get('success') }}</div>
			@endif
			
			<ul class="list-group shadow-sm">

				@foreach ($cats as $cat)
					<li class="list-group-item d-flex align-items-center justify-content-between">
						<span class="text-capitalize">{{ $cat->category }}</span>

						{{-- actions --}}
						<div class="actions d-flex align-items-center">

							{{-- update --}}
							<a href="{{ route('cpanel-categories-update', ['id' => $cat->id]) }}" class="update d-flex align-items-center justify-content-center text-capitalize text-decoration-none me-2">update</a>

							{{-- delete --}}
							<form action="{{ route('cpanel-categories-delete', ['id' => $cat->id]) }}" method="POST" class="delete-form">
								@csrf
								@method('DELETE')
								<button class="btn text-capitalize d-flex align-items-center justify-content-center">delete</button>
							</form>
						</div>
					</li>
				@endforeach

				@if ($cats->count() <= 0)
					<div class="alert alert-info text-capitalize rounded-0">no categories are found</div>
				@endif
			</ul>
		</div>
	</section>
@endsection