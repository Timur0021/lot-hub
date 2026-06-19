<?php

use App\Http\Controllers\Admin\Team\CreateController;
use App\Http\Controllers\Admin\Team\DeleteController;
use App\Http\Controllers\Admin\Team\EditController;
use App\Http\Controllers\Admin\Team\IndexController;
use App\Http\Controllers\Admin\Team\StoreController;
use App\Http\Controllers\Admin\Team\UpdateController;
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
