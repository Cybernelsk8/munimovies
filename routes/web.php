<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/{movie}', [HomeController::class,'show'])->name('show');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class,'show'])->name('dashboard');
Route::post('/{movie}/enrolled', [HomeController::class,'enrolled'])->middleware('auth')->name('enrolled');
Route::get('/{user}/favoritas', [HomeController::class,'favoritas'])->middleware('auth')->name('favoritas');
Route::post('/{movie}/delete', [HomeController::class, 'delete'])->middleware('auth')->name('delete');
