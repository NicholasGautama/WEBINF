<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tesreguler extends Model
{
    use HasFactory;

    protected $fillable=[
        'materites',
        'alattulis',
        'alatonline',
        'catatan',
        'link'
    ];
}
