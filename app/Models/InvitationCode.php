<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationCode extends Model
{
    protected $connection = 'mysql2';
    protected $fillable = ['code', 'used'];
}