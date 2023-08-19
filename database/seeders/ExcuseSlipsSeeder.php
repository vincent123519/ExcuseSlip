<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExcuseSlipsSeeder extends Seeder
{
    public function run()
    {
        DB::table('excuse_slips')->insert([
            [
                'student_id' => 1, // Assuming student_id from students table
                'course_absent' => 'Math 101',
                'reason_for_absence' => 'I was sick and couldn\'t attend the class.',
                'start_date' => '2023-08-01',
                'end_date' => '2023-08-03',
                'supporting_document' => 'path_to_document.pdf',
            ],
            // Add more excuse slip data as needed
        ]);
    }
}
