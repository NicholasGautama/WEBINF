<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inovasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'namap',
        'judul_penelitian',
        'nodaftar',
        'nohki',
    ];
}
