<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cpl extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodecpl',
        'namacpl',
    ];
}
