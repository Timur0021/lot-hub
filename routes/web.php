<?php

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
        Route::get('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'loginPage'])->name('login');
        Route::post('/', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login.post');
    });

/**
 * ADMIN DASHBOARD
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth:admin')
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [\App\Http\Controllers\Admin\Auth\LogoutController::class, 'logout'])->name('logout');

        /**
         * TEAM
        */
        Route::prefix('team')
            ->name('team.')
            ->group(function () {
                Route::get('/', [\App\Http\Controllers\Admin\Team\IndexController::class, 'index'])->name('index');
                Route::get('/create', [\App\Http\Controllers\Admin\Team\CreateController::class, 'create'])->name('create');
                Route::post('/', [\App\Http\Controllers\Admin\Team\StoreController::class, 'store'])->name('store');
                Route::get('/{admin}/edit', [\App\Http\Controllers\Admin\Team\EditController::class, 'edit'])->name('edit');
                Route::put('/{admin}', [\App\Http\Controllers\Admin\Team\UpdateController::class, 'update'])->name('update');
                Route::delete('/{admin}', [\App\Http\Controllers\Admin\Team\DeleteController::class, 'delete'])->name('delete');
            });

        /**
         * ROLES
        */
        Route::prefix('roles')
            ->name('roles.')
            ->group(function () {
                Route::get('/', [\App\Http\Controllers\Admin\Roles\IndexController::class, 'index'])->name('index');
                Route::get('/create', [\App\Http\Controllers\Admin\Roles\CreateController::class, 'create'])->name('create');
                Route::post('/', [\App\Http\Controllers\Admin\Roles\StoreController::class, 'store'])->name('store');
            });
    });
