<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Authenticate(LoginRequest $request)
    {
        // dd($request->all());
        // return redirect()->route('dashboard');

    //     $credential = ['email' => $request ->get('email'), "password" => $request ->get('password')];
    //     if(Auth::attempt($credential)){
    //         $request -> session()->regenerate();
    //         return redirect()->intended('dashboard');
    //     }
    //     return back() ->withErrors([
    //         'email'=> 'provided credential are not match in record',
    //     ]);
    // }
    // public function logout(){
    //     if(Auth::check()){
    //         Auth::logout();
    //     }
    //     return redirect()->route('login');


    $credentials = [
        'email' => $request ->get('email'), 
        "password" => $request ->get('password')
    ];
        if(Auth::attempt($credentials)){
            $request -> session()->regenerate();
            return redirect()->intended('login');
        }
        return back() ->withErrors([
            'email'=> 'provided credential are not match in record',
        ]);
    }
}
