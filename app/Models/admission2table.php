<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission2table extends Model
{
    use HasFactory;

    protected $fillable=[
        'year',
        'day',
        'date',
        'time'
    ];
}
