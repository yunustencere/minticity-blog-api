<?php

namespace App\Services\BlogPost;

interface BlogPostServiceInterface
{
  public function get_all();
  public function store(array $attributes);
}
