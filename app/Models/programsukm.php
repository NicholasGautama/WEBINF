<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programsukm extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'narasi',
        'image',
        'link'
    ];
}
