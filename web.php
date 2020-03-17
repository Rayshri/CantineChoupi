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
    return view('cantinechoupi');
});
Route::get('show', 'ProductController@showProducts');
Route::get('index', 'ProductController@index');
Route::get('showCategory', 'ProductController@showCategory');
Route::get('showCategory/{id}', 'ProductController@showCategory');
Route::get('add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
Route::get('shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);
Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);
Route::post('/checkout',  [
    'uses' => 'ProductController@postCheck',
    'as' => 'checkout'
]);


