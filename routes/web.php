<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;

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

Route::view('/register', 'auth.register');
Route::post('/register', [RegisterController::class, 'register']);
Route::view('/login', 'auth.login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::prefix('ask')->group(function () {
        Route::view('/', '')->name('user.ask');
        //Route::get('/', [RegisterController::class, 'register'])->name('main.list');
    });
});
