<?php

use Illuminate\Support\Facades\Route;

Route::prefix('akademis')->name('akademis.')->group(function () {
    Route::get('/', function () {
        return 'Module Akademis';
    })->name('index');
});
