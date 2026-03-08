<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pkl')->name('pkl.')->group(function () {
    Route::get('/', function () {
        return 'Module PKL';
    })->name('index');
});
