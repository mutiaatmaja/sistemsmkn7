<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
    Route::get('/', function () {
        return 'Module Pengaturan';
    })->name('index');
});
