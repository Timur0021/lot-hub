<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Team\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/**
 * AUTH ADMIN
 */
Route::prefix('admin')
    ->middleware('guest.admin')
    ->group(function () {
        Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
        Route::post('/', [LoginController::class, 'login'])->name('login.post');
    });

/**
 * ADMIN DASHBOARD
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth:admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

        /**
         * TEAM
        */
        Route::prefix('team')
            ->name('team.')
            ->group(function () {
                Route::get('/', [IndexController::class, 'index'])->name('index');
            });
    });
