<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $connection = 'mysql2';
    protected $fillable = ['title', 'description', 'image_path', 'is_active'];
}