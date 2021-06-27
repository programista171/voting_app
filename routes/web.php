<?php

use Illuminate\Support\Facades\Route;
//Use App\Http\Controllers\JournalistsController;

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

Route::get('/', [App\Http\Controllers\VotingController::class, 'index']);
Route::resource('/admin/journalists', App\Http\Controllers\JournalistsController::class);
Route::resource('journalists', App\Http\Controllers\VotingController::class);
//Route::get('/', [App\Http\Controllers\VotingController::class, 'index'])->name('index');
//Route::get('/show/{$id}', [App\Http\Controllers\VotingController::class, 'show'])->name('show');
Route::get('/vote', [App\Http\Controllers\VotingController::class, 'saveIp'])->name('voting');
Route::put('/vote', [App\Http\Controllers\VotingController::class, 'update'])->name('voting.update');