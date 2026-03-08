<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pengaduan')->name('pengaduan.')->group(function () {
    Route::get('/', function () {
        return 'Module Pengaduan';
    })->name('index');
});
