<?php

namespace App\Models;

// app/Models/ExcuseSlip.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcuseSlip extends Model
{
    protected $primaryKey = 'excuse_slip_id';

    protected $fillable = [
        'student_id', 'course_absent', 'reason_for_absence', 'start_date', 'end_date', 'supporting_document'
    ];

    // Define relationships here if needed
}

