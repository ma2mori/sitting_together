<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\MyPage\ProfileController;

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/register-shop', [AdminController::class, 'showShopRegisterForm'])->name('admin.register-shop');

Route::get('/', [IndexController::class, 'showIndex'])->name('/');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shops/{id}', [ShopsController::class, 'showShopDetail'])->name('shop');

Route::group(['middleware' => 'auth'], function () {
 Route::get('/mypage/edit-profile', [ProfileController::class, 'showProfileEditForm'])->name('mypage.edit-profile');
	Route::post('/mypage/edit-profile', [ProfileController::class, 'editProfile'])->name('mypage.edit-profile');
});
