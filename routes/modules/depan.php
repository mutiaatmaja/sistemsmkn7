<?php

use Illuminate\Support\Facades\Route;

Route::name('depan.')->group(function () {
    Route::view('/', 'beta.depan')->name('index');
});
