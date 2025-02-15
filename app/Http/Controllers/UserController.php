<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('user.profile', compact('cartItems'));
    }
}
