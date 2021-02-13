@extends('layouts.cpanel')

@section('title') Update Category @endsection

@section('body')
	<section class="create-page">
		<div class="container">
			
			{{-- create category --}}
			<div class="create-category bg-white shadow-sm">
				<form action="{{ route('cpanel-categories-update', ['id' => $cat->id]) }}" class="category-form" method="POST">
					@csrf

					@method('PUT')

					<h3 class="d-flex align-items-center text-uppercase mb-5">
						<i class="far fa-folder me-3"></i>
						<span>update category</span>
					</h3>

					<input type="text" name="category" value="{{ $cat->category }}" class="@error('category') border border-danger @enderror form-control rounded-0" placeholder="create category">
					@error('category')
					<div class="alert alert-danger text-capitalize mt-2 rounded-0">{{ $message }}</div>
					@enderror
					<button class="btn text-capitalize d-flex align-items-center justify-content-center mt-3">update</button>
				</form>
			</div>
		</div>
	</section>
@endsection