<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        $credential = ['email' => $request ->get('email'), "password" => $request ->get('password')];
        if(Auth::attempt($credential)){
            $request -> session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back() ->withErrors([
            'email'=> 'provided credential are not match in record',
        ]);
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('login');
    }
}
