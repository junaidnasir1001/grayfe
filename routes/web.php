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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class,'index'])->name('home');
Route::get('/about-us', [\App\Http\Controllers\Frontend\AboutController::class,'index'])->name('about');
Route::get('/services', [\App\Http\Controllers\Frontend\ServiceController::class,'index'])->name('services');;
Route::get('/portfolio', [\App\Http\Controllers\Frontend\PortfolioController::class,'index'])->name('portfolio');;
Route::get('/contact-us', [\App\Http\Controllers\Frontend\ContactController::class,'index'])->name('contact');;
