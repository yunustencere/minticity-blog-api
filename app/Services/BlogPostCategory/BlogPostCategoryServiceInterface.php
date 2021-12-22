<?php

namespace App\Services\BlogPostCategory;

interface BlogPostCategoryServiceInterface
{
  public function get_all();
  public function store(array $attributes);
  public function update(array $attributes);
  public function destroy(int $id);
}
