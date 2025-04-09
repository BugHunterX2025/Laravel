<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\get;

class StudentController extends Controller
{
    public function showStudents()
    {
        // $students = DB::table('student')
        //     ->join('city', 'student.city_id', '=', 'city.city_id')
        //     ->select('student.*', 'city.city_name')
        //     ->where('student.name', '=', 'John Doe')

        //     ->get();
        $students = DB::table('student')
            ->leftJoin('city', 'student.city_id', '=', 'city.city_id')->get();
        return $students;
        // return view('student', ['data' => $students]);
    }
    public function uniondata()
    {
        $manager = DB::table('admin')->select('name', 'email', 'city_name')->join('city', 'admin.city_id', '=', 'city.city_id');
        $emplotye = DB::table('student')->union($manager)->select('name', 'email', 'city_name')->join('city', 'student.city_id', '=', 'city.city_id')->get();
        return $emplotye;
    }
    public function whenData()
    {
        $students = DB::table('student')
            ->when(
                true,
                function ($query) {
                    $query->where('name', '=', 'John Doe');
                }
            )->get();

        return $students;
    }
    public function chunkdata()
    {
        $students = DB::table('student')->orderBy('student_id')->chunk(2, function ($students) {
            echo "<div style='border:1px solid red;margin-bottom:5px'>";

            foreach ($students as $set) {
                echo $set->name . "<br>";
            }
            echo "</div>";
        });
        $students = DB::table('student')->orderBy('student_id')->chunk(2, function ($students) {
            echo "<div style='border:1px solid red;margin-bottom:5px'>";

            foreach ($students as $set) {
                DB::table('student')->where('id', $set->id);
            }
            echo "</div>";
        });
    }
}
