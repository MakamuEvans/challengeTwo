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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('layouts.theme');
    })->name('index');
    Route::resource('/suppliers', 'SuppliersController');
    Route::resource('/products', 'ProductsController');
    Route::resource('/product-suppliers', 'ProductSuppliersController');
    Route::resource('/orders', 'OrdersController');
    Route::resource('/order-product', 'OrderDetailsController');
});

Route::fallback(function() {
    return redirect()->route('index');
});
