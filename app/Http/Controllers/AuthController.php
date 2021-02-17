<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['login', 'logout', 'update', 'create']]);
    }
    
    /*
    *@ Render login page
    */
    public function loginPage()
    {
    	if(auth()->user()) {
    		return redirect()->route('cpanel');
    	}

    	return view('auth.login');
    }

    /*
    *@ Render signup page
    */
    public function signupPage()
    {
    	if(auth()->user()) {
    		return redirect()->route('cpanel');
    	}

    	return view('auth.signup');
    }

    /*
    *@ Create new user
    */
    public function create(Request $request)
    {
    	$request->validate([
    		'username' 	=> 'required|min:5',
    		'email' 	=> 'required|email|unique:users,email',
    		'password' 	=> 'required|min:6|max:20',
    	]);

    	User::create([
    		'name'  	=> $request->username,
    		'email'  	=> $request->email,
    		'password'  => Hash::make($request->password),
    	]);

    	return redirect()->route('login')->withSuccess('user created successfully ...');
    }

    /*
    *@ Log user in
    */
    public function login(Request $request)
    {
    	$request->validate([
    		'email' => 'required',
    		'password' => 'required',
    	]);

    	if(Auth::attempt($request->only('email', 'password'), $request->remember)) {
    		return redirect()->route('cpanel');
    	} else {
    		$user = User::where('email', '=', $request->email);

    		if(!$user->value('email')) {
    			return redirect()->back()->with('error', 'invalid email address');
    		}

    		$password = Hash::check($user->value('password'), $request->password);
    		if(!$password) {
    			return redirect()->back()->with('error', 'password is incorrect');
    		}
    	}
    }

    /*
    *@ Update user profile
    */
    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,name,'.auth()->user()->id,
            'email'    => 'required|email:filter|unique:users,email,'.auth()->user()->id
        ]);

        $user           = User::findOrFail(auth()->user()->id);
        $user->name = $request->username;
        $user->email    = $request->email;

        if($request->password != '' || $request->password != null) {
            $request->validate([
                'password'      => 'required|min:6|max:20',
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('cpanel-profile')->withSuccess('user informations updated successfully ..');
    }

    /*
    *@ Log user out
    */
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
}
