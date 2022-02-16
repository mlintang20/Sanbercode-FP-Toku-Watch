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
    return view('home');
});

Auth::routes();

Route::resource('profile', 'ProfileController')->only([
    'index', 'update'
]);

Route::get('/home', 'HomeController@index')->name('home');

// CRUD Item
// Menambahkan resourceful route
Route::resource('item', 'ItemController');

// CRUD Category
// Menambahkan resourceful route
Route::resource('category', 'CategoryController');

//CRUD Cart
//Menambahkan cart
Route::get('/add-to-cart/{item}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{item_id}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{item_id}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

Route::resource('cart_order', 'CartOrderController')->middleware('auth');

Route::post('/review', 'ReviewController@review');