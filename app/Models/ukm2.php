<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ukm2 extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'judul1',
        'image1',
        'judul2',
        'image2',
        'judul3',
        'image3',
    ];
}
