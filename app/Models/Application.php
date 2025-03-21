<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $connection = 'mysql2';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'birth_date',
        'address',
        'position',
        'experience',
        'motivation',
        'question1',
        'question2',
        'question3',
        'status'
    ];
}