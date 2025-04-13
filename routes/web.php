<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class)->names([
    'index' => 'users.index',
]);

Route::resource('users.comments', CommentController::class);
