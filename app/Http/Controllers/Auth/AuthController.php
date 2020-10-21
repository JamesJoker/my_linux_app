<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	public function login()
	{
		return view("auth.login");
	}
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            //$user = Auth::user();
            //Auth::login($user);
            return redirect()->route('homepage');
            //return view("auth.logout");
            //return redirect()->intended('dashboard');
        }
        else{
        	return view("auth.register");
        }
    }
    
    public function register(Request $request)
    {
    	//hasing password
    	$request->password = Hash::make($request->password);

    	//save userinfomation
    	$users = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => $request->password
    		]);

    	//login the created account
    	return redirect()->action('Auth\AuthController@login');
    }

    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect()->route('homepage');
        }
        else
        {
            return "login failed";
        }
    }

    public function messageAuth(Request $request)
    {
        return $request;
    }
}
