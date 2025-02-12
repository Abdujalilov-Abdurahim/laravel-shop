<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{  
    public function register(Request $request)
    {
        return view("auth.register");
    }

    public function register_store(Request $request)
    {
        $valitade = $request->validate([
            "name" => "required",
            "email" => "required", "email:rfc,dns|unique:users, email",
            "password"=> "required","min:8",
            "password_confirmation" => "required","same:password",

        ]);

        $user = User::create($valitade);
        auth()->login($user);

        return redirect()->route("/")->with("success","");
    }

    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/");
        }

        return back()->withErrors([
            "email" => "The provided credentials do not match our records.",
        ])->onlyInput("email");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended("/");
    }
}
