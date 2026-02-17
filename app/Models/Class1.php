<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class1 extends Model
{
    use HasFactory;

    protected $table = 'class1';
    
    protected $fillable = [
        'title_1',
        'image',
        'title_2',
        'desc_title_2',
        'age',
        'seats',
        'time',
        'fee',

    ];
}
