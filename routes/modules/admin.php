<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'beta.dashboard-admin')->name('dashboard');
});
