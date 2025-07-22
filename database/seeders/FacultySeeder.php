<?php

namespace Database\Seeders;

use App\Enums\UserRole; //bruhh paki hanap
use App\Models\User; //bruhh paki hanap
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; //bruhh paki hanap

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User:: create(attributes:[
            "name" => "Joan Bulaon",
            "email" => "joanbulaon032002@gmail.com",
            "role" => UserRole::Faculty,
            "password" => Hash:: make(value: "Password123")
        ]);
    }
}
