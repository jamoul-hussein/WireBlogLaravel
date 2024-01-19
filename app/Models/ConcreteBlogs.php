<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcreteBlogs extends Model
{
    use HasFactory;

    protected $table = 'concrete_blogs';

    protected $fillable = [
        'content'
    ];
}
