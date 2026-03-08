<?php

use Illuminate\Support\Facades\Route;

Route::prefix('tracer-study')->name('tracer-study.')->group(function () {
    Route::get('/', function () {
        return 'Module Tracer Study';
    })->name('index');
});
