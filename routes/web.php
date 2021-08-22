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




Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('results', [App\Http\Controllers\FrontController::class, 'showResults']);
Route::resource('front', 'App\Http\Controllers\FrontController');
Route::get('vote', [App\Http\Controllers\FrontController::class, 'vote']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){
Route::resource('journalists', 'App\Http\Controllers\JournalistsController');
Route::get('journalists/votes/{journalist}', [App\Http\Controllers\JournalistsController::class, 'showVotes']);
});