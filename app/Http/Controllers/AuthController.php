<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function login() {
        return view('backend.auth.login');
    }
    public function auth_login(Request $request)  {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'status'=>1], $remember)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect(url('login'));
    }
}
