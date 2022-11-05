<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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

        return view('food-shop/index', [
            'randProducts' => $randProducts,
            'product' => $product
        ]);
    }

    public function productDetails(Request $request)
    {
        $product = Product::query()->where(['id'=>$request->id])->get();

        return view('food-shop/product-details', [
            'product'=>$product
        ]);
    }
}
