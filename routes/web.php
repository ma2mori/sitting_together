<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//  return view('index');
// });
Auth::routes();
Route::get('/','App\Http\Controllers\IndexController@showIndex')->name('/');
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/shops/{id}','App\Http\Controllers\ShopsController@showShopDetail')->name('shop');

Route::middleware('auth')->group(function(){
	Route::get('/mypage/edit-profile','App\Http\Controllers\Mypage\ProfileController@showProfileEditForm')->name('mypage.edit-profile');
});