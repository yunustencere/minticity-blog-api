<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostCategory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    public function blog_posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
