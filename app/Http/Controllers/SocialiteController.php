<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;

class SocialiteController extends Controller
{
    /**
	 * Redirect the user to the Google authentication page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function redirectToProvider()
	{
	    return Socialite::driver('google')->redirect();
	}

	/**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
	public function handleProviderCallback()
	{
	    try 
        {
            $user = Socialite::driver('google')->stateless()->user();
        } catch (Exception $e) {
            return redirect()->route('login'); 
        }

        $userExist = User::where('email', $user->email)->first();

        $myEmail ='abdoudev36@gmail.com';

        if($user->email === $myEmail)
        {
        	if($userExist)
	        {
	            auth()->login($userExist, true);
	            return redirect()->route('cpanel');
	        } else {
	            $newUser = new User;
	            $newUser->name      = $user->name;
	            $newUser->email     = $user->email;
	            $newUser->user_id       = $user->id;
	            $newUser->avatar    = $user->avatar;

	            auth()->login($newUser, true);

	            return redirect()->route('cpanel');
	        }
        } else {
            return redirect()->route('login')->with('error', 'invalid user credentials');
        }
	}
}
