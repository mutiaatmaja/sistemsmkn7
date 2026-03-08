<?php

use Illuminate\Support\Facades\Route;

Route::prefix('sarpras')->name('sarpras.')->group(function () {
    Route::get('/', function () {
        return 'Module Sarana & Prasarana';
    })->name('index');
});
