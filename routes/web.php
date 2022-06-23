<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\Session;

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
//login
Route::get('/login', function () {
    return view('login');
});
//logout and remove session
Route::get('/logout',function (){
    Session::forget('user');
    return redirect('/login');
});

Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);

Route::get('/products',[\App\Http\Controllers\ProductController::class,'index']);
Route::get('/products/details/{id}',[\App\Http\Controllers\ProductController::class,'product']);
Route::post('/search',[\App\Http\Controllers\ProductController::class,'search']);
Route::post('/add_to_cart',[\App\Http\Controllers\ProductController::class,'add_to_cart']);
Route::get('/cart-list',[\App\Http\Controllers\ProductController::class,'cartList']);
