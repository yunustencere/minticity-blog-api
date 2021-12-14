<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPost\StoreRequest;
use App\Services\BlogPost\BlogPostServiceInterface;
use Illuminate\Http\Request;
use Throwable;


class BlogPostController extends Controller
{
    protected $service;
    public function __construct(
        BlogPostServiceInterface $service
    ) {
        $this->service = $service;
    }

    public function index()
    {
        try {
            $blogPosts = $this->service->get_all();
            return response()->json(['result' => 'success', 'blog_posts' => $blogPosts], 201);
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
