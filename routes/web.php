<?php

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
Route::get('/index', function () {
    return view('layouts.index');
});
Auth::routes();
Route::middleware(['auth'])->group(function () {
        Route::resource('products',\App\Http\Controllers\ProductController::class);
        Route::resource('category',\App\Http\Controllers\CategoryController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
