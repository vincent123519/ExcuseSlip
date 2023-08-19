<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AppUsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('app_users')->insert([
            [
                'username' => 'student1',
                'password' => Hash::make('password123'),
                'user_type' => 'student',
            ],
            [
                'username' => 'counselor1',
                'password' => Hash::make('password123'),
                'user_type' => 'counselor',
            ],
            // Add more user data as needed
        ]);
    }
}

