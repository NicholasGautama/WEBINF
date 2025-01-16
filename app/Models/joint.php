<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joint extends Model
{
    use HasFactory;

    protected $fillable=[
        'semester',
        'code',
        'coursename',
        'credits',
        'elo1',
        'elo2',
        'elo3',
        'elo4',
        'elo5',
        'elo6',
        'elo7',
        'elo8',
        'elo9',
    ];
}
