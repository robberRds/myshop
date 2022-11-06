<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function shopList()
    {
        $products = Product::all();
        //$products = Product::query()->limit(3)->offset(1)->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/shop-page', [
            'products' => $products,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }
    public function shopIndex()
    {
        $randProducts = Product::query()->orderBy('name')->limit(4)->get();
        $product = Product::query()->select()->inRandomOrder()->limit(1)->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/index', [
            'randProducts' => $randProducts,
            'product' => $product,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function productDetails(Request $request)
    {
        $product = Product::query()->where(['id'=>$request->id])->get();

        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/product-details', [
            'product'=>$product,
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function addCart(Request $request)
    {
        $product = Product::query()->where(['id'=>$request->id])->first();

        $sessionId = Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image'=>$product->image,
            ],
        ]);

        $cart = \Cart::getContent();

        return redirect()->back();
    }

    public function contact()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');

        return view('food-shop/contact', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function about()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('food-shop/about-us', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function checkout()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('food-shop/checkout', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function profile()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('food-shop/my-account', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }

    public function mycart()
    {
        $sessionId = Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum = \Cart::getTotal('price');
        return view('food-shop/cart', [
            'cart' => $cart,
            'sum' => $sum
        ]);
    }
}
