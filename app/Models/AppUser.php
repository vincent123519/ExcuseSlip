<?php

// app/Models/AppUser.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'username', 'password', 'user_type'
    ];
}
