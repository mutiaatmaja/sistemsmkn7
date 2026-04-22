<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::bimbingan.index')->name('index');
Route::livewire('/beta', 'pages::bimbingan.beta')->name('beta');
