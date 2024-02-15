<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/add-product', function () {
    return view('add_product');
});

Route::get('/edit-product', function () {
    return view('edit_product');
});

Route::get('/dashboard', function () {
    $products = DB::select('select id, name, price from products');
    return view('dashboard', ['products' => $products]);
});
