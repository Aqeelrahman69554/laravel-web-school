<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogDetail extends Model
{
    use HasFactory;

    protected $table = 'blog_detail';


    protected $fillable = [
        'title_1',
        'image_1',
        'desc_title_1',
        'title_2',
        'desc_title_2',
        'image_2',
    ];
}
