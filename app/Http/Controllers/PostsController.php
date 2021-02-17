<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /*
    *@ create post
    */
    public function create(Request $request)
    {
    	$request->validate([
    		'title'		=> 'required|unique:posts,title',
    		'body'		=> 'required',
    	]);

    	$post 					= new Post();
    	$post->title 			= $request->title;
    	$post->author 			= 'abdou';
    	$post->slug 			= Str::slug($request->title, '-');
    	$post->post_category 	= $request->post_category;
    	$post->image 			= '0';
    	$post->thumbnail 		= '0';
    	$post->body 			= $request->body;

    	if($request->hasFile('image'))
    	{
    		$request->validate([
    			'image' => 'image|mimes:jpg,jpeg,gif,svg,png|max:4024'
    		]);

    		$date = Carbon::now();

    		$image = sha1($date).$request->image->getClientOriginalName();

    		$request->image->move(public_path('/files/images'), $image);

    		$post->image = $image;
    	}

    	$post->save();

    	return redirect()->route('cpanel-posts')->withSuccess('post created successfully ...');
    }

    /*
    *@ delete post
    */
    public function destroy(Request $request, $id)
    {
    	$post = Post::findOrFail($id);

    	$img = public_path('/files/images/').$post->image;

    	if(file_exists($img)) {
    		@unlink($img);
    	}

    	$post->delete();

    	return redirect()->route('cpanel-posts')->withSuccess('post deleted successfully ...');
    }

    /*
    *@ update post page
    */
    public function updatePage($id)
    {
    	$post = Post::findOrFail($id);
    	return view('cpanel.pages.updatePost', compact('post'));
    }

    /*
    *@ update post
    */
    public function update(Request $request, $id)
    {
    	$post = Post::findOrFail($id);

    	$request->validate([
    		'title'		=> 'required|unique:posts,title,'.$post->id.',id',
    		'body'		=> 'required',
    	]);

    	$post->title 			= $request->title;
    	$post->author 			= 'abdou';
    	$post->slug 			= Str::slug($request->title, '-');
    	$post->post_category 	= $request->post_category;
    	$post->image 			= $post->image;
    	$post->thumbnail 		= $post->thumbnail;
    	$post->body 			= $request->body;

    	if($request->hasFile('image'))
    	{
    		$request->validate([
    			'image' => 'image|mimes:jpg,jpeg,gif,svg,png|max:4024'
    		]);

    		$date = Carbon::now();

    		$image = sha1($date).$request->image->getClientOriginalName();

    		$request->image->move(public_path('/files/images'), $image);

    		$prevImg = public_path('/files/images/').$post->image;

    		if(file_exists($prevImg)) {
    			@unlink($prevImg);
    		}

    		$post->image = $image;
    	}

    	$post->update(['id', $post->id]);

    	return redirect()->route('cpanel-posts')->withSuccess('post updated successfully ...');
    }
}
