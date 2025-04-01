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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('post');
})->name('mypost');
Route::get('/about', function () {
    return view('firstpost');
});

// route::get('/test', function () {
//     return view('firstpost');
// });
// Route::redirect('/posts', '/test', 301);
// // Route::permanentRedirect('/post', '/test', 301);

// //larvel route groups
// Route::prefix('page')->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::get('/about', function () {
//         return view('firstpost');
//     });
// });

// route::fallback(function () {
//     return "<h1>not found ok";
// });

function getUsers()
{
    return   [
        1 => ['name' => 'saurabh', 'phone' => '8171995707'],
        2 => ['name' => 'archi', 'phone' => '8171995707'],
    ];
};
route::get('/users', function () {
    // $name = "saurabh";
    $names = getUsers();
    return view('users', ['user' => $names]);
    // return view('users', ['user' => $name, 'city' => 'Dehli', 'script' => '<script>alert("this");</script>']);
    // return view('users')->with('user', $name)->with('city', 'dehli');
    // return view('users')->withUser($name)->withCity('Dehli');

});
route::get('/user/{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id]; //find id passby route

    return view('user', ['id' => $user]);

    // return "<h1>User:" . $id . "</h1>";
})->name('view.user');
