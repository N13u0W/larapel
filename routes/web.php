<?php

use App\Controllers\HomeController;
use App\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/add-to-do-list', [HomeController::class,'add']);
Route::post('/add-to-do-list', [HomeController::class, 'store']);
Route::get('/to-do-list-update/{id}', [HomeController::class, '']);
Route::get('/to-do-list-update/{id}', [HomeController::class, 'update'])->name('update');
// 'store'])->name('add');

Route::apiResource('/list-siswa', StudentController::class);

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
