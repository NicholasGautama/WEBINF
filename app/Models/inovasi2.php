<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inovasi2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester',
        'tahun',
        'namap1',
        'nidn1',
        'programstud',
        'namap2',
        'nidn2',
        'namap3',
        'nidn3',
        'namap4',
        'nidn4',
        'judul_penelitian',
        'nodaftar',
        'nohki',
        'tanggal',
        'hibah',
        'jenis',
        'tautan',
    ];
}
