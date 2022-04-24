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
    return view('index');
});
Route::get('/about_us', function () {
    return view('about-us');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/gallery', function () {
    return view('gallery');
});

//Route::get('/contact', 'EnquiryController@index');
Route::match(['get','post'],'/contact', 'EnquiryController@index');
