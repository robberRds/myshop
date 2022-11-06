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

        return view('food-shop/shop-page', [
            'products' => $products,
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

        return view('food-shop/product-details', [
            'product'=>$product
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
}
