<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//  return view('index');
// });
Auth::routes();
Route::get('/','App\Http\Controllers\IndexController@showIndex')->name('/');
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/shops/{shop-id}','App\Http\Controllers\ShopsController@showShopDetail')->name('shop');
