<?php

use App\Http\Controllers\Admin\Chat\MessageController;
use Illuminate\Support\Facades\Route;

Route::prefix('chat')
    ->name('chat.')
    ->group(function () {
        Route::get('/messages/{userId}', [MessageController::class, 'index'])->name('messages.index');
        Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    });
