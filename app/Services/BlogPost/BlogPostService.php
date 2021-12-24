<?php

namespace App\Services\BlogPost;

use App\Helpers\UploadHelper;
use App\Models\BlogPost;
use Illuminate\Http\Exceptions\HttpResponseException;

class BlogPostService implements BlogPostServiceInterface
{

    public function get_all()
    {
        return BlogPost::all();
    }

    public function store(array $attributes)
    {
        $fullUrl = null;
        if (key_exists('file', $attributes)) {
            $fullUrl = UploadHelper::uploadFile($attributes['file'], '/blog-post-images');
        }
        $blogPost = BlogPost::create(array_merge($attributes, ['image_url' => $fullUrl]));
        return BlogPost::find($blogPost->id);
    }
}
