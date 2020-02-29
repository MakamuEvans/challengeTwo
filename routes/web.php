<?php

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

Route::get('/', function () {
    return view('layouts.theme');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/suppliers', 'SuppliersController');
Route::resource('/products', 'ProductsController');
Route::resource('/product-suppliers', 'ProductSuppliersController');
Route::resource('/orders', 'OrdersController');
