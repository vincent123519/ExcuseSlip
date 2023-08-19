<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeansSeeder extends Seeder
{
    public function run()
    {
        DB::table('deans')->insert([
            [
                'user_id' => 1, // Assuming user_id from app_users table
                'name' => 'John Smith',
            ],
            // Add more dean data as needed
        ]);
    }
}

