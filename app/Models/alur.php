<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alur extends Model
{
    use HasFactory;

    protected $fillable = [
        'kurikulum',
        'judul',
        'image',
    ];
}