@extends('layouts.cpanel')

@section('title') Profile @endsection

@section('body')
	<section class="profile-page">
		<div class="container bg-white shadow-sm">

			{{-- user information --}}
			<ul class="list-group">
				<li class="list-group-item d-flex align-items-center justify-content-between">
					<span class="text-capitalize">name</span>
					<span class="text-capitalize">{{ auth()->user()->name }}</span>
				</li>
				<li class="list-group-item d-flex align-items-center justify-content-between">
					<span class="text-capitalize">email</span>
					<span>{{ auth()->user()->email }}</span>
				</li>
			</ul>

			{{-- update button --}}
			{{-- <a href="{{ route('cpanel-profile-update') }}" class="btn mt-3 text-capitalize d-flex align-items-center justify-content-center">update profile</a> --}}
		</div>
	</section>
@endsection