<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'text', 'blog_post_category_id'];

    public function blog_post_category()
    {
        return $this->belongsTo(BlogPostCategory::class);
    }
}
