<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merdeka extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester',
        'kodemk',
        'mk',
        'sksteori',
        'deskripsimk',
        'skspraktek',
    ];
}