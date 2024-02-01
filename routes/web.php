<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('trash', [IndexController::class, 'trash'])->name('trash');

Route::get('kabinet', [IndexController::class, 'kabinet'])->name('kabinet');

Route::get('admin', [IndexController::class, 'admin'])->name('admin');