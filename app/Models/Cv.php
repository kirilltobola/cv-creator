<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'city',
        'phone',
        'email',
        'tg',
        'github',
        'objective',
        'hardSkills',
        'softSkills',
        'education',
        'ps'
    ];
}
