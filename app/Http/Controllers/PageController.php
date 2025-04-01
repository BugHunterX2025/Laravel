<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showHome()
    {
        // return "<h1> Welcom to controller</h1>";
        return view('welcome');
    }
    public function showUser($id)
    {
        // return "<h1> Welcom to controller</h1>";
        // return view('welcome');
        // return view('user', ['id' => $id]);
        // same key and varible when usee compact
        return view('user', compact('id'));
    }
    public function showBlog()
    {
        return view('blog');
    }
}
