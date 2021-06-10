<?php

use Illuminate\Support\Facades\Route;
//Use App\Http\Controllers\JournalistsController::class;

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

Route::resource('admin/journalists', App\Http\Controllers\JournalistsController::class);//->name('journalist');
Route::resource('/', App\Http\Controllers\VotingController::class);
