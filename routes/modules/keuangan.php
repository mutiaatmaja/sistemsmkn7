<?php

use Illuminate\Support\Facades\Route;

Route::prefix('keuangan')->name('keuangan.')->group(function () {
    Route::get('/', function () {
        return 'Module Keuangan';
    })->name('index');
});
