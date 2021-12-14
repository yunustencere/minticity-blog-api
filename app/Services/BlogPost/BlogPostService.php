<?php

namespace App\Services\BlogPost;

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
    return BlogPost::create($attributes);
  }


  private function throw(string $message)
  {
    throw new HttpResponseException(response()->json([
      'errors' => $message
    ], 422));
  }
}
