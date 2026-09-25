<?php

use App\Http\Controllers\Admin\Options\Settings\IndexController;
//use App\Http\Controllers\Admin\Options\Settings\CreateController;
//use App\Http\Controllers\Admin\Options\Settings\DeleteController;
//use App\Http\Controllers\Admin\Options\Settings\EditController;
//use App\Http\Controllers\Admin\Options\Settings\StoreController;
//use App\Http\Controllers\Admin\Options\Settings\UpdateController;
use Illuminate\Support\Facades\Route;


Route::prefix('settings')
    ->name('settings.')
    ->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('index');
    });
