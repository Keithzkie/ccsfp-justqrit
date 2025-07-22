<?php

namespace Database\Seeders;

use App\Models\Student; // Import the Student model
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample Student 1
        Student::create([
            'name' => 'Juan Dela Cruz',
            'student_id' => '2023-00001',
            'course' => 'BSIT',
            'section' => 'A',
            'year_level' => '1st Year',
        ]);

        // Sample Student 2
        Student::create([
            'name' => 'Maria Clara Santos',
            'student_id' => '2023-00002',
            'course' => 'BSAIS',
            'section' => 'B',
            'year_level' => '2nd Year',
        ]);

        // Sample Student 3
        Student::create([
            'name' => 'Jose Rizal',
            'student_id' => '2023-00003',
            'course' => 'BSED',
            'section' => 'C',
            'year_level' => '3rd Year',
        ]);

        // You can add more students here as needed
    }
}