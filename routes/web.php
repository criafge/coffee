<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function () {
    Route::group(['namespace'=> 'App\Http\Controllers\admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', App\Http\Controllers\admin\IndexController::class)->name('admin');
        Route::resource('categories', App\Http\Controllers\admin\CategoryController::class)->only('store', 'destroy');
        Route::resource('coffees', App\Http\Controllers\admin\CoffeeController::class)->only('store', 'update', 'destroy');

    });
    Route::group(['middleware' => 'user'], function(){
        Route::post('update/data', [UserController::class, 'updateData'])->name('update-data');
    });

});



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('trash', [IndexController::class, 'trash'])->name('trash');

Route::get('kabinet', [IndexController::class, 'kabinet'])->name('kabinet');

