<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'image',
        'path_image_desktop',
        'path_image_mobile',
        'active',
        'link'
    ];
}
