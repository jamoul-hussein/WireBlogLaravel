<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AbstractBlogs extends Model
{
    use HasFactory;

    protected $table = 'abstract_blogs';

    protected $fillable = [
        'name', 'description', 'category', 'concrete_blogs_id', 'images_blogs_id'
    ];

    public function imagesBlog(): BelongsTo
    {
        return $this->belongsTo(ImagesBlogs::class, 'images_blogs_id');
    }

    public function concreteBlog(): BelongsTo
    {
        return $this->belongsTo(ConcreteBlogs::class, 'concrete_blogs_id');
    }
}
