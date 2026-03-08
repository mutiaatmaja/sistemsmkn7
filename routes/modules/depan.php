<?php

use App\Http\Controllers\Modules\Depan\DepanController;
use Illuminate\Support\Facades\Route;

Route::name('depan.')->group(function () {
    Route::get('/', [DepanController::class, 'index'])->name('index');
    Route::get('/depan/{section}', [DepanController::class, 'section'])
        ->whereIn('section', ['prestasi', 'informasi', 'sarpras'])
        ->name('section');
    Route::get('/depan/{section}/{slug}', [DepanController::class, 'detail'])
        ->whereIn('section', ['prestasi', 'informasi', 'sarpras'])
        ->name('detail');
});
