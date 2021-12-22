<?php

namespace App\Services\BlogPost;

use App\Helpers\UploadHelper;
use App\Models\BlogPost;
use Illuminate\Http\Exceptions\HttpResponseException;

class BlogPostService implements BlogPostServiceInterface
{

  public function get_all()
  {
    return BlogPost::where('id', 2)->with('blog_post_category')->get();
  }

  public function store(array $attributes)
  {
    $fullUrl = UploadHelper::uploadFile($attributes['file'], '/blog-post-images');
    error_log("test");
    error_log($fullUrl);
    return BlogPost::create(array_merge($attributes, ['image_url' => $fullUrl]));
  }

}
