<?php

namespace App\Providers;


use App\Services\BlogPost\BlogPostService;
use App\Services\BlogPost\BlogPostServiceInterface;
use App\Services\BlogPostCategory\BlogPostCategoryService;
use App\Services\BlogPostCategory\BlogPostCategoryServiceInterface;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogPostServiceInterface::class, BlogPostService::class);
        $this->app->bind(BlogPostCategoryServiceInterface::class, BlogPostCategoryService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
