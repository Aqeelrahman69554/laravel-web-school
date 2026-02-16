<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home';

    protected $fillable = [
        'tagline',
        'title',
        'desc_title',
        'image',
        'created_at',
        'updated_at',
    ];
}
