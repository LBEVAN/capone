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

Route::delete('destroyAll', [
    'as' => 'cart.destroyAll',
    'uses' =>'CartController@destroyAll'
]);

Route::resource('cart', 'CartController', ['only' => [
    'index',
    'store',
    'update',
    'destroy'
]]);

Route::resource('store', 'StoreController', ['only' => [
    'index', 
    'show'
]]);

Route::post('abc', array('as' => 'abc', 'uses' => 'ContactController@postContact'));

Route::get('contact', array('as' => 'contact', function() {
    return view('page/contact');
}));

Route::get('socials', array('as' => 'socials', function() {
    return view('page/socials');
}));

Route::prefix('checkout')->group(function () {
    Route::get('customer-information', function () {
        return view('checkout/customer-information');
    });
});

