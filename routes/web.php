<?php

use Illuminate\Support\Facades\Route;

/*
--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});
Route::redirect('/home', '/', 301);
Route::get('/shop', function(){
    return view('app');
});
Route::get('/about', function(){
    return view('app');
});
Route::get('/contact', function(){
    return view('app');
});
Route::get('/account', function(){
    return view('app');
});
Route::get('/cart', function(){
    return view('app');
});
