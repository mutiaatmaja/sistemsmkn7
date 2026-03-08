<?php

use Illuminate\Support\Facades\Route;

Route::prefix('perpustakaan')->name('perpustakaan.')->group(function () {
    Route::get('/', function () {
        return 'Module Perpustakaan';
    })->name('index');
});
