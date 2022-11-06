<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [\App\Http\Controllers\ProductController::class, 'shopIndex'])
    ->name('food-shop/index');

Route::get('food-shop/shop-page', [\App\Http\Controllers\ProductController::class, 'shopList'])
    ->name('food-shop/shop-page');

Route::get('food-shop/index', [\App\Http\Controllers\ProductController::class, 'shopIndex'])
    ->name('food-shop/index');

Route::get('food-shop/product-details', [\App\Http\Controllers\ProductController::class, 'productDetails'])
    ->name('food-shop/product-details');

Route::get('food-shop/contact', [\App\Http\Controllers\ProductController::class, 'contact'])
    ->name('food-shop/contact');

Route::get('food-shop/about', [\App\Http\Controllers\ProductController::class, 'about'])
    ->name('food-shop/about');

Route::get('food-shop/add-cart', [\App\Http\Controllers\ProductController::class, 'addCart'])
    ->name('food-shop/add-cart');

Route::get('food-shop/checkout', [\App\Http\Controllers\ProductController::class, 'checkout'])
    ->name('food-shop/checkout')->middleware('auth');

Route::get('food-shop/my-account', [\App\Http\Controllers\ProductController::class, 'profile'])
    ->name('food-shop/my-account')->middleware('auth');

Route::post('food-shop/make-order', [\App\Http\Controllers\ProductController::class, 'makeOrder'])
    ->name('food-shop/make-order')->middleware('auth');

Route::get('food-shop/cart', [\App\Http\Controllers\ProductController::class, 'mycart'])
    ->name('food-shop/cart')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*Route::get('food-shop/product-details', function () {
    return view('food-shop/product-details');
})->name('food-shop/product-details');*/

Route::get('food-shop/shop-list', function () {
    return view('food-shop/shop-list');
})->name('food-shop/shop-list');

Route::get('food-shop/cart', function () {
    return view('food-shop/cart');
})->name('food-shop/cart');

Route::get('food-shop/wishlist', function () {
    return view('food-shop/wishlist');
})->name('food-shop/wishlist');



