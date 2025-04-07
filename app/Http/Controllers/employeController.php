<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeController extends Controller
{
    //
    public function showUser()
    {
        $employe =   DB::table('employes')->whereDate('created_at', '2025-04-07')->orderBy('name')->get();
        // $employe =   DB::table('employes')->find(2);

        // return $employe;
        // dd($employe);
        // dump($employe);
        // foreach ($employe as $emp) {
        //     echo $emp->name . "<br>";
        // }
        return view('allusers', ['data' => $employe]);
    }
    public function singleUser(string $id)
    {
        $employe = DB::table('employes')->where('id', $id)->get();
        return view('fullinfo', ['data' => $employe]);
    }
    public function deleteUser(string $id)
    {
        $user = DB::table('employes')->where('id', $id)->delete();
        // return redirect()->view('allusers');
        if ($user) {
            return redirect()->route('home');
        }
    }
    public function addUser(Request $req)
    {

        $user = DB::table('employes')->insert(
            [
                'name' => $req->name,
                'email' => $req->email,
                'created_at' => now()
            ],
        );
        if ($user) {
            return redirect()->route('home');
        } else {
            echo "<h1>Not Add</h1>";
        }
    }
    public function updateUser(Request $req)
    {
        $user = DB::table('employes')->where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
        ]);
        if ($user) {
            return redirect()->route('home');
        } else {
            echo "<h1>Not Update</h1>";
        }
    }
    public function deleteAllUser()
    {
        $user = DB::table('employes')->delete();
    }
    public function updatePage($id)
    {
        // $user = DB::table('employes')->where('id', $id)->get();
        $user = DB::table('employes')->find($id);
        return view('updateuser', ['data' => $user]);
    }
}
