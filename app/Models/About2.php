<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About2 extends Model
{
    use HasFactory;
    protected $table = 'about_2';

    protected $fillable = [
        'icon',
        'title',
        'desc_title',
    ];

}
