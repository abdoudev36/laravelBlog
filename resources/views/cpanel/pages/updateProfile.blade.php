@extends('layouts.cpanel')
@section('title') Update Profile @endsection

@section('body')
	<section class="updateProfile-page">
		<div class="container">
			<form action="{{ route('user-update') }}" method="POST" class="update-form bg-white shadow-sm">
				@csrf
				@method('PUT')
				
				<h3 class="d-flex align-items-center m-0 mb-4 text-capitalize">
					<span class="icon me-2 d-flex align-items-center justify-content-center"><i class="fas fa-user"></i></span>
					<span>create account</span>
				</h3>

				{{-- username --}}
				<div class="form-group">
					<input type="text" value="{{ auth()->user()->name }}" name="username" class="@error('username') border border-danger @enderror form-control" placeholder="username" value="{{ old('username') }}">
					@error('username')
					<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
					@enderror
				</div>

				{{-- email --}}
				<div class="form-group">
					<input type="email" value="{{ auth()->user()->email }}" name="email" class="@error('email') border border-danger @enderror form-control" placeholder="someone@email.com" value="{{ old('email') }}">
					@error('email')
					<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
					@enderror
				</div>

				{{-- password --}}
				<div class="form-group">
					<input type="password" name="password" class="@error('password') border border-danger @enderror form-control" placeholder="*********">
					@error('password')
					<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
					@enderror
				</div>

				{{-- submit button --}}
				<button class="btn d-flex align-items-center justify-content-center text-capitalize">signup</button>
			</form>
		</div>
	</section>
@endsection