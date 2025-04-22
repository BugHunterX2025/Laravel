<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::resource('/users', User::class);
