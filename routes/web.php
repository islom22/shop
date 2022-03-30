<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients',[ClientController::class, 'index']);
Route::post('/clients',[ClientController::class, 'store'])->name('client-post');
//Route::get('/currency',[CurrencyController::class, 'index'])->name('currency');
//Route::post('/currency',[ClientController::class, 'store'])->name('currency-post');
Route::get('/product',[ProductController::class, 'index']);
Route::post('/product',[ProductController::class, 'store'])->name('product-post');
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/admin_product',[AdminController::class,'product'])->name('product');
Route::get('/show',[ClientController::class, 'show']);


