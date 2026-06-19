<?php

use Illuminate\Support\Facades\Route;


require __DIR__.'/admin/admin.php';


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
