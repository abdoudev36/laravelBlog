@extends('layouts.cpanel')

@section('title') Create @endsection

@section('body')
	<section class="create-page">
		<div class="container">
			
			{{-- create category --}}
			<div class="create-category bg-white shadow-sm">
				<form action="{{ route('cpanel-categories-create') }}" class="category-form" method="POST">
					@csrf

					<h3 class="d-flex align-items-center text-uppercase mb-5">
						<i class="far fa-folder me-3"></i>
						<span>create category</span>
					</h3>

					<input type="text" name="category" class="@error('category') border border-danger @enderror form-control rounded-0" placeholder="create category">
					@error('category')
					<div class="alert alert-danger text-capitalize mt-2 rounded-0">{{ $message }}</div>
					@enderror
					<button class="btn text-capitalize d-flex align-items-center justify-content-center mt-3">create</button>
				</form>
			</div>

			{{-- create post --}}
			<div class="create-post mt-4 bg-white shadow-sm">

				<form action="{{ route('cpanel-posts-create') }}" method="POST" class="post-form" enctype="multipart/form-data">
					@csrf

					<h3 class="d-flex align-items-center text-uppercase mb-5">
						<i class="far fa-newspaper me-3"></i>
						<span>create post</span>
					</h3>

					{{-- title --}}
					<div class="form-group">
						<label for="title" class="form-label text-capitalize text-info">post title</label>
						<input type="text" name="title" class="@error('title') border border-danger @enderror form-control rounded-0" placeholder="post title" value="{{ old('title') }}">
						@error('title')
						<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
						@enderror
					</div>

					{{-- post category --}}
					<div class="form-group">
						<label for="post_category" class="form-label text-capitalize text-info">post category</label>
						<select name="post_category" class="@error('post_category') border border-danger @enderror form-select rounded-0">
							<option value="uncategorized">select category</option>
							@foreach ($cats as $cat)
							<option value="{{ $cat->category }}">{{ $cat->category }}</option>
							@endforeach
						</select>
						@error('post_category')
						<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
						@enderror
					</div>

					{{-- image --}}
					<div class="form-group">
						<label for="image" class="form-label text-capitalize text-info">post image</label>
						<input type="file" name="image" class="@error('image') border border-danger @enderror form-control rounded-0">
						@error('image')
						<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
						@enderror
					</div>

					{{-- body --}}
					<div class="form-group">
						<label for="body" class="form-label text-capitalize text-info">post body</label>
						<textarea name="body" class="@error('body') border border-danger @enderror form-control rounded-0">{{ old('body') }}</textarea>
						@error('body')
						<div class="alert alert-danger text-capitalize rounded-0 mt-2">{{ $message }}</div>
						@enderror
					</div>

					<button class="btn submit-btn d-flex align-items-center justify-content-center">create</button>
				</form>

			</div>
		</div>
	</section>
@endsection