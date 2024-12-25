<?php

use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/quiz/{quiz_id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('quiz.detail');


Route::get('/quiz/{quiz_id}/pertanyaan/{question_id}', [App\Http\Controllers\HomeController::class, 'question'])->name('quiz.pertanyaan');
Route::post('/quiz/{quiz_id}/pertanyaan/{question_id}', [App\Http\Controllers\HomeController::class, 'question_store'])->name('quiz.pertanyaan.store');


Route::get('/quiz/{quiz_id}/berhasil', [App\Http\Controllers\HomeController::class, 'success'])->name('quiz.berhasil');


// ADMIN

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('kuis', App\Http\Controllers\Admin\QuizController::class);
    Route::resource('pertanyaan',QuestionController::class);
    Route::resource('pengguna',UserController::class);
    
});