<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'anfragen';
    
    protected $fillable = [
        'vorname_nachname',
        'telefonnummer',
        'anfrage',
        'erstellt_von',
        'status'
    ];

    protected $attributes = [
        'status' => 'Eingetroffen',
        'erstellt_von' => 'Website'
    ];
}