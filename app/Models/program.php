<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi',
        'gambar1',
        'gambar2',
        'gambar3',
    ];
}
