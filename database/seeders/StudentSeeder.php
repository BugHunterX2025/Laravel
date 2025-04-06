<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $students = collect([
        //     [
        //         'name' => 'John Doe',
        //         'email' => 'john@example.com',
        //     ],
        //     [
        //         'name' => 'Jane Smith',
        //         'email' => 'jane.smith@example.com',
        //     ],
        //     [
        //         'name' => 'Alice Johnson',
        //         'email' => 'alice.johnson@example.com',
        //     ],
        //     [
        //         'name' => 'Bob Williams',
        //         'email' => 'bob.williams@example.com',
        //     ],
        //     [
        //         'name' => 'Charlie Brown',
        //         'email' => 'charlie.brown@example.com',
        //     ]
        // ]);
        $json = File::get(path: 'database/json/students.json');
        $students = collect(json_decode($json));


        $students->each(function ($student) {
            Student::create([
                'name' => $student->name,
                'email' => $student->email,
            ]);
        });
    }
}
