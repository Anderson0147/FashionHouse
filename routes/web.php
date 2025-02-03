<?php

use Illuminate\Support\Facades\Route;




Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


Route::get('/home', function () {
    return view('welcome');
});
