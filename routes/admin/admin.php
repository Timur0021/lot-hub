<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/sections/auth.php';

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth:admin')
    ->group(function () {
        require __DIR__.'/sections/dashboard.php';
        require __DIR__.'/sections/team.php';
        require __DIR__.'/sections/roles.php';
    });
