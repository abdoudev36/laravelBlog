@extends('layouts.auth')
@section('title') Login @endsection

@section('body')
	<form action="{{ route('login') }}" method="POST" class="login-form bg-white shadow-sm d-flex flex-column justify-content-center">
		
		@csrf

		<h3 class="d-flex align-items-center m-0 mb-4 text-capitalize">
			<span class="icon me-2 d-flex align-items-center justify-content-center"><i class="fas fa-user"></i></span>
			<span>login to your account</span>
		</h3>

		{{-- display errors --}}
    	@if(session()->has('error'))
    		<div class="alert alert-danger text-capitalize mb-2 rounded-0">{{ session()->get('error') }}</div>
    	@endif

        {{-- display errors --}}
        @if(session()->has('success'))
            <div class="alert alert-success text-capitalize mb-2 rounded-0 text-white">{{ session()->get('success') }}</div>
        @endif

		{{--  
		<div class="form-group">
			<input type="email" name="email" class="@error('email') border border-danger @enderror form-control" placeholder="someone@email.com" value="{{ old('email') }}">
			@error('email')
			<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
			@enderror
		</div>

		<div class="form-group">
			<input type="password" name="password" class="@error('password') border border-danger @enderror form-control" placeholder="*********">
			@error('password')
			<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
			@enderror
		</div> --}}
		<div class="social-links d-flex align-items-center">
			<a href="{{ route('google-login') }}" class="link d-flex align-items-center justify-content-center tec-decoration-none">
				<i class="fab fa-google"></i>
			</a>
		</div>

		{{-- submit button --}}
		{{-- <button class="btn d-flex align-items-center justify-content-center text-capitalize">login</button> --}}
	</form>
@endsection