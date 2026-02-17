<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';

    protected $fillable = [
        'title_1',
        'image',
        'twiter',
        'linkedin',
        'facebook',
        'name',
        'status',
    ];
}
