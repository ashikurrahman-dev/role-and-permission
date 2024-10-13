<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
            
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt($data, $remember)) {
            return redirect('panel/dashboard');
        } else {
            return redirect()->back()->with('error', 'Please valid email and password.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
