<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserAccess extends Model
{
    use HasFactory;

    protected $table = 'user_access';

    protected $fillable = [
        'home',
        'about',
        'academic',
        'research',
        'student',
        'news',
        'contact',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
