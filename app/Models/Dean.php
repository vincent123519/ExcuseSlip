<?php

// app/Models/Dean.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dean extends Model
{
    protected $primaryKey = 'dean_id';

    protected $fillable = [
        'user_id', 'name'
    ];

    // Define relationships here if needed
}
