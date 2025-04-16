<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::resource('/user', User::class);
