<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;





class AdminController extends Controller
{
    public function adminLoginForm()
    {
        return view("admin.login");
    }

    public function admin_login(Request $request)
    {
        $credentials = $request->validate([
            "email"=> ["required", "email"],
            "password" => ["required",]
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('main');
        }
        
        return back()->withErrors(["email" => "Email yoki parol noto‘g‘ri!"]);
    }
    
}
