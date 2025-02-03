<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/post', function () {
//     // return view('post');
//     return "<h1>Direct define</h1>";
//     // return response()->make('<h1>This is my route page</h1>');
// });

Route::view('post', '/post');
