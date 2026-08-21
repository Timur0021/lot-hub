<?php

use Illuminate\Support\Facades\Route;


Route::name('front.')
    ->group(function () {
        require __DIR__ . '/sections/home.php';
    });
