<?php

// app/Models/Counselor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    protected $primaryKey = 'counselor_id';

    protected $fillable = [
        'user_id', 'name'
    ];

    // Define relationships here if needed
}

