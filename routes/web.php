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

// Route::view('/post', 'post');
// // makeing subroute 
// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

// route parameter

// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// });
//  how make optiona
// Route::get('/post/{id?}', function (string $id = null) {
//     if ($id) {
//         return "This is post id: $id";
//     } else {
//         return "No id";
//     }
// });
//multiple paramerter

// Route::get('/post/{id?}/comment/{comid?}', function (string $id = null, string $comid = null) {

//     return "this is post" . $id . "and comment" . $comid;
// });

// how strict your parameter 
// Route constant
// use differnt diffent method 
// 1.whereNumber
// 2.whereAlpha
// 3.whereAlphaNum
// 7.wherein
// 8.whereNotIn



// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereNumber('id');

// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereAlpha('id');

// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereAlphaNumeric('id');
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->where('id', '\d{4}-\d{2}-\d{2}');

// })->whereIn('id', [1, 2, 3]);
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereNotIn('id', [1, 2, 3]);
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereBetween('id', [1, 2, 3]);
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereNotBetween('id', [1, 2, 3]);
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereNull('id');
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->whereNotNull('id');
// Route::get('/post/{id}', function (string $id) {
//     return "This is post id: $id";
// })->where('id', '>=', 1);

// for multiple constant
// Route::get('/post/{id}/{name}', function (
//     string $id,
//     string $name
// ) {
//     return "This is post id: $id and name: $name";
// })->where('id', '[0-9]+')->where('name', '[a-zA-Z]+');

// name routess