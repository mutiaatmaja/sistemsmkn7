<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::admin.index')->name('index');
Route::view('/dashboard', 'modules.admin.dashboard')->name('dashboard');
Route::livewire('/settings', 'pages::admin.setting')->name('settings');
