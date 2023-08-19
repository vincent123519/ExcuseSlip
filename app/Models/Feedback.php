<?php

// app/Models/Feedback.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $primaryKey = 'feedback_id';

    protected $fillable = [
        'excuse_slip_id', 'feedback_text', 'feedback_type'
    ];

    // Define relationships here if needed
}
