<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $stu = Student::with('companyPhoneNo')->find(2);
        $stu = Student::with("company")->with('companyPhoneNo')->get();
        // echo $user->name."br";
        foreach ($stu as $stud) {
            echo $stud->name . "<br>";
            echo "Company: " . $stud->company->name . "<br>";
            echo "Phone Number: " . $stud->companyPhoneNo->numbers . "<br>";
            echo "<hr>";
        }

        // return $stu;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
