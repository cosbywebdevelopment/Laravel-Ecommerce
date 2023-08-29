<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
        $products = Products::factory()->count(4)->make();
        $cartCollection = Cart::getContent();
        if($cartCollection->count() > 0){
            $count = $cartCollection->count();
        } else{
            $count = '0';
        }
        return view('index', compact('products', 'count'));
    }

    function addToCart(Request $request){
        // this func will add products to the cart then return cart count
        Cart::add(array(
            'id' => $request->id, // inique row ID
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => 1,
            'attributes' => array()
        ));
        $cartCollection = Cart::getContent();
        $count = $cartCollection->count();
        return $count;
    }

    function checkout(){
        $cartCollection = Cart::getContent();
        if($cartCollection->count() > 0){
            $count = $cartCollection->count();
            $total = Cart::getTotal();
        } else{
            $count = '0';
        }
        return view('checkout.index', compact('count', 'cartCollection', 'total'));
    }
}
