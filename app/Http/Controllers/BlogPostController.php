<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPost\StoreRequest;
use App\Services\BlogPost\BlogPostServiceInterface;
use App\Services\BlogPostCategory\BlogPostCategoryServiceInterface;
use Illuminate\Http\Request;
use Throwable;


class BlogPostController extends Controller
{
    protected $service;
    protected $blog_post_category_service;
    public function __construct(
        BlogPostServiceInterface $service,
        BlogPostCategoryServiceInterface $blog_post_category_service
    ) {
        $this->service = $service;
        $this->blog_post_category_service = $blog_post_category_service;
    }

    public function index()
    {
        try {
            $blogPosts = $this->service->get_all();
            $blogPostCategories = $this->blog_post_category_service->get_all();
            return response()->json(['result' => 'success', 'blog_posts' => $blogPosts, 'blog_post_categories' => $blogPostCategories], 201);
        } catch (Throwable $th) {
            return response()->json(['result' => 'failure', 'error' => $th->getMessage()], 500);
        }
    }

    public function store(StoreRequest $request)
    {
        try {
            $blogPosts = $this->service->store($request->validated());
            return response()->json(['result' => 'success', 'blog_posts' => $blogPosts], 201);
        } catch (Throwable $th) {
            return response()->json(['result' => 'failure', 'error' => $th->getMessage()], 500);
        }
    }




    public function destroy()
    {
    }
}
