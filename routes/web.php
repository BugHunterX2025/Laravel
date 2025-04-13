<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('adduser');
});
Route::post('/adduser', [UserController::class, 'addUser'])->name('adduser');
