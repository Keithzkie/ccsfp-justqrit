<?php

namespace Database\Seeders;

use App\Enums\UserRole; //bruhh paki hanap
use App\Models\User; //bruhh paki hanap
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; //bruhh paki hanap

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User:: create(attributes:[
            "name" => "Keithleen Nash Jurilla",
            "email" => "jurillakeithleennash082804@gmail.com",
            "role" => UserRole::Admin,
            "password" => Hash:: make(value: "Password123")
        ]);
    }
}
