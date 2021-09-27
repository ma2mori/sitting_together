<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//  return view('index');
// });
Auth::routes();
Route::get('/','App\Http\Controllers\IndexController@showIndex')->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
