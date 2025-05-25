<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});
route::view('login', 'login')->name('login');
Route::post('/registersave', [UserController::class, 'register'])->name('registersave');
route::post('/loginmatch', [UserController::class, 'logincheck'])->name('loginmatch');
// route::view('dashboard', 'dashboard')->name('dashboard');
route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
route::get('logout', [UserController::class, 'logout'])->name('logout');
