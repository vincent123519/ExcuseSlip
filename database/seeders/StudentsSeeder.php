<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            [
                'user_id' => 1, // Assuming user_id from app_users table
                'name' => 'John Doe',
                'degree_program' => 'Computer Science',
                'year_level' => 2,
            ],
            // Add more student data as needed
        ]);
    }
}

