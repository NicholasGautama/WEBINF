<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'sertifikasi',
        'penjelasan',
        'spesialisasi',
        'kontak',
        'tautan',
    ];
}