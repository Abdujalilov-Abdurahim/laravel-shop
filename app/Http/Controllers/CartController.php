<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with("error", "Savatchaga mahsulot qo'shish uchun tizimga kiring!");
        }

        $product = Product::findOrFail($productId);

        $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $productId)->first();
    

    if ($cart) {
        $cart->quantity += $request->quantity;
        $cart->save();
    } else {
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'quantity' => $request->quantity
        ]);
    }
    return redirect()->route('user.profile')->with("success", "Mahsulot qo'shildi");
    }

}
