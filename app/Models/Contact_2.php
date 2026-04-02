<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact_2 extends Model
{
    use HasFactory;

    protected $table = 'contact_2';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
}
