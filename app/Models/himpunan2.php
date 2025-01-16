<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class himpunan2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'judul1',
        'image1',
        'judul2',
        'image2',
        'judul3',
        'image3',
        'kontak1',
        'tautan1',
        'kontak2',
        'tautan2',
        'kontak3',
        'tautan3',
        'kontak4',
        'tautan4',
        'kontak5',
        'tautan5',
    ];
}
