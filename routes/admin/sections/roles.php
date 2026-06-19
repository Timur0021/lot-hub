<?php

use App\Http\Controllers\Admin\Roles\CreateController;
use App\Http\Controllers\Admin\Roles\DeleteController;
use App\Http\Controllers\Admin\Roles\EditController;
use App\Http\Controllers\Admin\Roles\IndexController;
use App\Http\Controllers\Admin\Roles\RolePermissionsController;
use App\Http\Controllers\Admin\Roles\StoreController;
use App\Http\Controllers\Admin\Roles\UpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('roles')
    ->name('roles.')
    ->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
        Route::get('/create', [CreateController::class, 'create'])->name('create');
        Route::post('/', [StoreController::class, 'store'])->name('store');

        Route::get('/{role}/edit', [EditController::class, 'edit'])->name('edit');
        Route::patch('/{role}', [UpdateController::class, 'update'])->name('update');
        Route::delete('/{role}', [DeleteController::class, 'delete'])->name('delete');

        Route::get('/{role}/permissions', [RolePermissionsController::class, 'edit'])->name('permissions');
        Route::post('/{role}/permissions', [RolePermissionsController::class, 'update'])->name('permissions.update');
    });
