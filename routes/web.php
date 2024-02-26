<?php

use App\Http\Controllers\barista\IndexController as BaristaIndexController;
use App\Http\Controllers\barista\StatusController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/coffee/{coffee}', [CoffeeController::class, 'showCoffee'])->name('coffee-page');

Route::group(['middleware'=> 'auth'], function () {
    Route::group(['namespace'=> 'App\Http\Controllers\admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', App\Http\Controllers\admin\IndexController::class)->name('admin');
        Route::resource('categories', App\Http\Controllers\admin\CategoryController::class)->only('store', 'destroy');
        Route::resource('coffees', App\Http\Controllers\admin\CoffeeController::class)->only('store', 'update', 'destroy');

    });
    Route::group(['middleware' => 'user'], function(){
        Route::post('update/data', [UserController::class, 'updateData'])->name('update-data');
        Route::resource('baskets', App\Http\Controllers\BasketController::class)->only('index', 'store', 'destroy');
        Route::resource('applications', App\Http\Controllers\ApplicationController::class);
        Route::post('update/basket', [BasketController::class, 'updateBasket']);
        Route::post('change/pass', [UserController::class, 'changePass'])->name('change-pass');
    });

    Route::group(['middleware' => 'barista'], function(){
        Route::get('/cabinet', BaristaIndexController::class);
        Route::post('/change/status/{application}', [StatusController::class, 'changeStatus'])->name('change-status');
    });

});

