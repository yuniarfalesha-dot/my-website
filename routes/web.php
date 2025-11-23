<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StudentController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('students', StudentController::class);
});