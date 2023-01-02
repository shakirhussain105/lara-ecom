<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        //$trendProducts = ;
        //dd($trendProducts);
        return view('product.index', ['products' => $products]);
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product.detail', ['product' => $product]);
    }

    public function searchProduct(Request $request)
    {
        //dd($request);
        $products = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('product.search', ['products' => $products]);
    }
    public function addToCart(Request $request)
    {
        // dd($request->session()->get('user'));
        if ($request->session()->has('user')) {
            $cart = Cart::create([
                'user_id' => $request->session()->get('user')['id'],
                'product_id' => $request->input('product_id'),
            ]);
            return $cart;
        } else
            return redirect('login');
    }
}
