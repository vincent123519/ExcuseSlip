<?php

// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'user_id', 'name', 'degree_program', 'year_level'
    ];

    // Define relationships here if needed
}
