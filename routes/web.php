<?php

use App\Http\Controllers\employeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emp', [employeController::class, 'showUser'])->name('home');

Route::get('/empfull/{id}', [employeController::class, 'singleUser'])->name('deatils');
Route::post('/addemp', [employeController::class, 'addUser'])->name('addemp');
Route::post('/updateemp/{id}', [employeController::class, 'updateUser'])->name('updateUser');
Route::get('/updatepage/{id}', [employeController::class, 'updatePage'])->name('updatepage');

Route::get('/empdel/{id}', [employeController::class, 'deleteUser'])->name('deleteUser');
Route::view('newuser', '/adduser');
