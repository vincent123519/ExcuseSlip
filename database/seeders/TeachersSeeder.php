<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersSeeder extends Seeder
{
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'user_id' => 2, // Assuming user_id from app_users table
                'name' => 'Jane Smith',
                'subject_area' => 'Mathematics',
            ],
            // Add more teacher data as needed
        ]);
    }
}
