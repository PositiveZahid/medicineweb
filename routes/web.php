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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');

Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

Route::resource('/order', 'OrderController')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});

Route::resource('/shop', 'ShopController')->middleware('auth');

Route::get('/prescription', 'HomeController@prescription')->name('home.prescription')->middleware('auth');

Route::resource('/prescription-order', 'PrescriptionOrderController')->middleware('auth');
