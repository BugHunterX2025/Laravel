<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PepoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('adduser');
// });
// Route::post('/adduser', [UserController::class, 'addUser'])->name('adduser');
route::resource('/users', StudentController::class);
route::resource('/cust', CustomerController::class);
route::resource('/country', CountryController::class);
route::resource('/people', PepoleController::class);
