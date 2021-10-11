<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPage\ProfileController;

Auth::routes();
Route::get('/','App\Http\Controllers\IndexController@showIndex')->name('/');
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/shops/{id}','App\Http\Controllers\ShopsController@showShopDetail')->name('shop');

Route::group(['middleware' => 'auth'],function(){
	Route::get('/mypage/edit-profile',[ProfileController::class,'showProfileEditForm'])->name('mypage.edit-profile');
});
