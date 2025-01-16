<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission2 extends Model
{
    use HasFactory;

    protected $fillable=[
        'judul1',
        'isi1',
        'judul2',
        'isi2'
    ];
}
