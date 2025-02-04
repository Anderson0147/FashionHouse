<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;




Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


Route::get('/home', function () {
    return view('welcome');
});
