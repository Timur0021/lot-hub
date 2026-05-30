<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth:admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

/**
 * AUTH
 */
Route::prefix('admin')
    ->middleware('guest.admin')
    ->group(function () {
        Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
        Route::post('/', [LoginController::class, 'login'])->name('login.post');
    });
