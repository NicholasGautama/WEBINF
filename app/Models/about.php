<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi1',
        'isi2',
        'isi3',
    ];
}