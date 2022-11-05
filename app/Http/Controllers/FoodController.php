<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function about(){
        return view('food-shop/about-us');
    }
}
