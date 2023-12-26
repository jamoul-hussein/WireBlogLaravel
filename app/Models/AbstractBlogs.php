<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbstractBlogs extends Model
{
    use HasFactory;

    protected $table = 'abstract_blogs';

    protected $fillable = [
        'name', 'description', 'category'
    ];
}
