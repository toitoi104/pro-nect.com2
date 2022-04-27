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
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::view('/',  'welcome');
Route::get('/questions',  [\App\Http\Controllers\Questions\QuestionsController::class, 'index'])->name('questions');
Route::get('/questions/{id}',  [\App\Http\Controllers\Questions\QuestionsController::class, 'detail'])->name('questions.detail');

Route::middleware('auth.user')->prefix('user')->group(function () {
    Route::prefix('question')->group(function () {
        Route::view('/', 'user.question.index')->name('user.question');
        Route::view('/complete', 'user.question.complete')->name('user.question.complete');
        Route::post('/create', [\App\Http\Controllers\User\Question\QuestionController::class, 'create'])->name('user.question.create');
        Route::post('/answer', [\App\Http\Controllers\User\Question\QuestionController::class, 'answer'])->name('user.question.answer');
    });
});

Route::prefix('admin')->group(function () {
    Route::view('/sample/design', 'admin.sample.design')->name('admin.sample.design');
    Route::view('/login', 'auth.login')->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\Auth\AdminAuthController::class, 'admin.login.post']);
    Route::post('/logout', [\App\Http\Controllers\Auth\AdminAuthController::class, 'admin.logout']);
});

Route::middleware('auth.admin')->group(function () {

});
