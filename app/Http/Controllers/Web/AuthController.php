<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\muslim;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['email','password']]);
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect(route('homepage'))->with('WelcomeAuthUser','message goes here');
        }else{
            return redirect()->back()->with('wrong_login','wrong credentials !');
        }

    }

    public function Logout(Request $request)
    {
        auth()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect(url('/'));
        
    }
}
