<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesBlogs extends Model
{
    use HasFactory;

    protected $table = 'images_blogs';

    protected $fillable = [
        'image_link'
    ];
}
