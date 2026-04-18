<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix('dashboard')->group(function(){
    Route::view("cantract" , 'livewire.cantract.index');
    Route::view('department' , 'livewire.dapartment.index');
    Route::view('designation' , 'livewire.designation.index');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
