<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetail2 extends Model
{
    use HasFactory;

    protected $table = 'blog_detail_2';

    protected $fillable = [
        'image_1',
        'name',
        'message',
        'title_1',
        'list_title_1',
        
    ];
}
