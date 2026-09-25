<?php

use App\Http\Controllers\Admin\Team\Admins\CreateController;
use App\Http\Controllers\Admin\Team\Admins\DeleteController;
use App\Http\Controllers\Admin\Team\Admins\EditController;
use App\Http\Controllers\Admin\Team\Admins\IndexController;
use App\Http\Controllers\Admin\Team\Admins\StoreController;
use App\Http\Controllers\Admin\Team\Admins\UpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('team')
    ->name('team.')
    ->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/create', [CreateController::class, 'create'])->name('create');
        Route::post('/', [StoreController::class, 'store'])->name('store');

        Route::get('/{admin}/edit', [EditController::class, 'edit'])->name('edit');
        Route::put('/{admin}', [UpdateController::class, 'update'])->name('update');
        Route::delete('/{admin}', [DeleteController::class, 'delete'])->name('delete');
    });
