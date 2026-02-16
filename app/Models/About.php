<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'image_1',
        'image_2',
        'title',
        'desc_title',
        'list',
    ];

    protected $casts = [
        'list' => 'array',
    ];
}
