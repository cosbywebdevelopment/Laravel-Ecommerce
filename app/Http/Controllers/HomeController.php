<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
        $products = Products::factory()->count(4)->make();
        if(Cart::getTotalQuantity() > 0){
            $count = Cart::getTotalQuantity();
        } else{
            $count = '0';
        }
        return view('index', compact('products', 'count'));
    }

    function addToCart(Request $request){
        // this func will add products to the cart then return cart count
        Cart::add(array(
            'id' => $request->id, // unique row ID
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => 1,
            'attributes' => array()
        ));
        return Cart::getTotalQuantity();
    }

    function checkout(){
        $cartCollection = Cart::getContent();
        if(Cart::getTotalQuantity() > 0){
            $count = Cart::getTotalQuantity();
            $total = Cart::getTotal();
        } else{
            $count = '0';
            $total = '0';
        }
        return view('checkout.index', compact('count', 'cartCollection', 'total'));
    }

    function emptyCart(Request $request){
        if($request->cart == 'empty-cart'){
            Cart::clear();
        }
        return 0;
    }
}
