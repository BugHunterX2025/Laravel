<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(UserRequest $req)
    {
        //     $req->validate([
        //         'name' => 'required',
        //         'email' => 'required|email',
        //         'age' => 'required|numeric|between:18,27',
        //         'password' => 'required|alpha_num|min:6'

        //     ], [
        //         'name.required' => 'Name is required',
        //     ]);
        return $req->all();
    }
}
