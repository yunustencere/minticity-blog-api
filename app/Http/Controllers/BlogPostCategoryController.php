<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostCategory\StoreRequest;
use App\Services\BlogPostCategory\BlogPostCategoryServiceInterface;
use Illuminate\Http\Request;
use Throwable;


class BlogPostCategoryController extends Controller
{
    protected $service;
    public function __construct(
        BlogPostCategoryServiceInterface $service
    ) {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $blogPostCategories = $this->service->get_all();
            return response()->json(['result' => 'success', 'blog_posts_categories' => $blogPostCategories], 201);
        } catch (Throwable $th) {
            return response()->json(['result' => 'failure', 'error' => $th->getMessage()], 500);
        }
    }

    public function show()
    {
    }

    public function store(StoreRequest $request)
    {
        try {
            $blogPostCategories = $this->service->store($request->validated());
            return response()->json(['result' => 'success', 'blog_posts_categories' => $blogPostCategories], 201);
        } catch (Throwable $th) {
            return response()->json(['result' => 'failure', 'error' => $th->getMessage()], 500);
        }
    }


    public function destroy()
    {
    }
}
