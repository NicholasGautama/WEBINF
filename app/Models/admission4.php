<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission4 extends Model
{
    use HasFactory;

    protected $fillable=[
        'isi',
        'link',
        'alamat'    
    ];
}
