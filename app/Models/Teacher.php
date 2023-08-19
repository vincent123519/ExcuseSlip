<?php

// app/Models/Teacher.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'teacher_id';

    protected $fillable = [
        'user_id', 'name', 'subject_area'
    ];

    // Define relationships here if needed
}
