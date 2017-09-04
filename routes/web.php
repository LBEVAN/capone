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

Route::resource('store', 'StoreController', ['only' => [
    'index', 'show'
]]);

Route::get('contact', array('as' => 'contact', function() {
    return view('page/contact');
}));

Route::get('about', array('as' => 'about', function() {
    return view('page/about');
}));

