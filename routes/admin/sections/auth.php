<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware('guest.admin')
    ->group(function () {
        Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
        Route::post('/', [LoginController::class, 'login'])->name('login.post');
    });
