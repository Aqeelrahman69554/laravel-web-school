<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'title',
        'desc_title',
        'address',
        'email',
        'phone',
        'open',
    ];
}
