<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('shop-category');
});

Route::get('/product', function () {
    return view('shop-product');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/post', function () {
    return view('blog-post');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});