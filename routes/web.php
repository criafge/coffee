<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function () {
    Route::group(['namespace'=> 'App\Http\Controllers\admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', [IndexController::class])->name('admin');
        Route::resource('categories', App\Http\Controllers\admin\CategoryController::class)->only('store', 'destroy');
    });
});


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('trash', [IndexController::class, 'trash'])->name('trash');

Route::get('kabinet', [IndexController::class, 'kabinet'])->name('kabinet');

Route::get('admin', [IndexController::class, 'admin'])->name('admin');
