<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
        $products = Products::factory()->count(4)->make();
        return view('index', compact('products'));
    }

    function addToCart(){

        return view('checkout/index');
    }

    function checkout(){
        return view('checkout.index');
    }
}
