<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounselorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('counselors')->insert([
            [
                'user_id' => 1, // Assuming user_id from app_users table
                'name' => 'Michael Johnson',
            ],
            // Add more counselor data as needed
        ]);
    }
}

