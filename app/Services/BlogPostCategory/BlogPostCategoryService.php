<?php

namespace App\Services\BlogPostCategory;

use App\Models\BlogPost;
use App\Models\BlogPostCategory;
use Illuminate\Http\Exceptions\HttpResponseException;

class BlogPostCategoryService implements BlogPostCategoryServiceInterface
{
    public function get_all()
    {
        return BlogPostCategory::all();
    }

    public function store(array $attributes)
    {
        return BlogPostCategory::create($attributes);
    }

    public function update(array $attributes)
    {
        $blogPostCategory = BlogPostCategory::find($attributes['id']);
        $blogPostCategory->update($attributes);
        return $blogPostCategory->refresh();
    }

    public function destroy(int $id)
    {
        BlogPostCategory::find($id)->delete();
    }
}
