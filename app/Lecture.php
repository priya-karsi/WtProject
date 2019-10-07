<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'time_in','time_out','schedule','teacher',
    ];    
}
