<?php

namespace Database\Seeders;

use App\Models\employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employes = collect([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
            ],
            [
                'name' => 'Bob Williams',
                'email' => 'bob.williams@example.com',
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
            ]
        ]);
        $employes->each(function ($employe) {
            employe::create([
                'name' => $employe['name'],
                'email' => $employe['email']
            ]);
        });
    }
}
