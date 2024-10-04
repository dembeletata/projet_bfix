<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{
    protected $table = 'agents';
    protected $fillable = ['username', 'password', 'service'];
    protected $hidden = ['password'];
}
