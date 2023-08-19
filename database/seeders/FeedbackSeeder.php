<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        DB::table('feedback')->insert([
            [
                'excuse_slip_id' => 1, // Assuming excuse_slip_id from excuse_slips table
                'feedback_text' => 'Your excuse slip has been reviewed and approved.',
                'feedback_type' => 'approval',
            ],
            // Add more feedback data as needed
        ]);
    }
}

