<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('home.checkout');
Route::post('/add-to-cart', [HomeController::class, 'addToCart'])->name('home.addToCart');
Route::post('/empty-cart', [HomeController::class, 'emptyCart'])->name('home.emptyCart');

