<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class research2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'skema',
        'judul_penelitian',
        'peneliti',
    ];
}
