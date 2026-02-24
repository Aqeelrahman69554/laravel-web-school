<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About3 extends Model
{
    use HasFactory;

    protected $table = 'about_3';

    protected $fillable = [
        'image',
        'title_1',
        'desc_title_1',
        'title_2',
        'desc_title_2',
    ];
}
