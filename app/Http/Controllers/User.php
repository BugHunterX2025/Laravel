<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = employe::all();
        // $users = employe::find([2, 11], ['name', 'email']);
        // $users = employe::count();
        // $user = employe::min('id');
        // $user = employe::where([
        //     ['name', 'khushi jain']
        // ])->get();
        // $user = employe::whereName('khushi jain')->ddRawSql();
        $users = employe::simplepaginate(4);
        return view('home', compact('users'));
        return $user;
        // return view('welcome', compact('users'));
        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new employe;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index')->with('status', 'New user added successfully');        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = employe::find($id);

        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = employe::find($id);

        return view('update', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',

        ]);
        $user = employe::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index')->with('status', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = employe::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('status', 'User deleted successfully');
    }
}
