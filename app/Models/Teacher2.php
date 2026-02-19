<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher2 extends Model
{
    use HasFactory;

    protected $table = 'teacher_2';

    protected $fillable = [
        'title',
        'coment',
        'image',
        'name',
        'status',
    ];
}
