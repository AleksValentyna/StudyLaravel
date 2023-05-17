<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyHomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
   return view('');
});


Route::get('/home', [MyHomeController::class, 'index']);
Route::get('/info', [MyHomeController::class, 'info']);
Route::post('/contact', [ContactController::class, 'submit']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/page', [PostController::class, 'submit']);
Route::get('/page', [PostController::class, 'index']);