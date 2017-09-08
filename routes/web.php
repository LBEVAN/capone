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

Route::get('/', array('as' => '/', function() {
    return view('page/home');
}));

Route::post('store/addToCart/{product}', [
    'as' => 'store.addToCart',
    'uses' => 'StoreController@addToCart'
]);

Route::post('store/removeFromCart/{id}', [
    'as' => 'store.removeFromCart',
    'uses' => 'StoreController@removeFromCart'
]);

Route::resource('store', 'StoreController', ['only' => [
    'index', 
    'show'
]]);

Route::get('contact', array('as' => 'contact', function() {
    return view('page/contact');
}));

Route::get('socials', array('as' => 'socials', function() {
    return view('page/socials');
}));

