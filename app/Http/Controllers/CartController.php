<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // dd($request->session()->get('user'));
        if ($request->session()->has('user')) {
            $cart = Cart::create([
                'user_id' => $request->session()->get('user')['id'],
                'product_id' => $request->input('product_id'),
            ]);
            return redirect('/');
        } else
            return redirect('login');
    }
    public static function getCartItems()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
}
