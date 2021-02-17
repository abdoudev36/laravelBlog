<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CpanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /*
    *@ Render cpanel dashboard page
    */
    public function index()
    {
        $cats   = Category::all();
        $posts  = Post::all();
    	return view('cpanel.index', compact('cats', 'posts'));
    }

    /*
    *@ Render cpanel crrate page
    */
    public function create()
    {
        $cats   = Category::orderBy('created_at', 'desc')->get();

    	return view('cpanel.pages.create', compact('cats'));
    }

    /*
    *@ Render cpanel posts page
    */
    public function posts()
    {
        $posts  = Post::orderBy('created_at', 'desc')->get();
        return view('cpanel.pages.posts', compact('posts'));
    }

    /*
    *@ Render cpanel categories page
    */
    public function categories()
    {
        $cats = Category::orderBy('created_at', 'desc')->get();
        
        return view('cpanel.pages.categories', compact('cats'));
    }

    /*
    *@ Render cpanel comments page
    */
    public function comments()
    {
        return view('cpanel.pages.comments');
    }

    /*
    *@ Render cpanel messages page
    */
    public function messages()
    {
        return view('cpanel.pages.messages');
    }

    /*
    *@ Render cpanel profile page
    */
    public function profile()
    {
        return view('cpanel.pages.profile');
    }

    /*
    *@ Render cpanel profile page
    */
    public function updateProfile()
    {
        return view('cpanel.pages.updateProfile');
    }
}
