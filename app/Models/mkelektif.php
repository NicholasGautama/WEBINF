<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mkelektif extends Model
{
    use HasFactory;

    protected $fillable = [
        'kurikulum',
        'kodemk',
        'mk',
        'sksteori',
        'skspraktek',
        'deskripsimk',
        'prasyarat'
    ];
}