<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Auth.RegisterForm');
    }
    public function registerUser(RegisterRequest $request)
    {
        // dd($request->all());
        $user = new User();
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password= bcrypt($request->get('password'));

        $user->save();
        return redirect()->route('register')->with(['msg'=>'Register is successful']);
    }

    public function loginForm()
    {
        return view('Auth.LoginForm');
    }
}
