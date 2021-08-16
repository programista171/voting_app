<?php

use Illuminate\Support\Facades\Route;
//Use App\Http\Controllers\JournalistsController;

//Use App\Http\Controllers\FrontController;

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




//for displaying front page
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);


Route::resource('front', 'App\Http\Controllers\FrontController');

//for voting
Route::get('vote', [App\Http\Controllers\FrontController::class, 'vote']);



Route::resource('journalists', 'App\Http\Controllers\JournalistsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
