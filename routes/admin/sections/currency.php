<?php

use App\Http\Controllers\Admin\Currency\CreateController;
use App\Http\Controllers\Admin\Currency\DeleteController;
use App\Http\Controllers\Admin\Currency\EditController;
use App\Http\Controllers\Admin\Currency\IndexController;
use App\Http\Controllers\Admin\Currency\StoreController;
use App\Http\Controllers\Admin\Currency\UpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('currency')
    ->name('currency.')
    ->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/create', [CreateController::class, 'create'])->name('create');
        Route::post('/', [StoreController::class, 'store'])->name('store');

        Route::get('/{currency}/edit', [EditController::class, 'edit'])->name('edit');
        Route::put('/{currency}', [UpdateController::class, 'update'])->name('update');
        Route::delete('/{currency}', [DeleteController::class, 'delete'])->name('delete');
    });
