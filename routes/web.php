<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'homepage']);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/product/create', [ProductController::class, 'create'])->name('create.product');
Route::post('/product/store', [ProductController::class, 'store'])->name('add.product');
