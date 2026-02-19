<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogGrid extends Model
{
    use HasFactory;

    protected $table = 'blog_grid';

    protected $fillable = [
        'title_1',
        'image',
        'subtitle',
        'descsubtitle',
    ];
}
