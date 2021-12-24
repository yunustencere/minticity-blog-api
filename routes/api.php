<?php

use App\Http\Controllers\BlogPostCategoryController;
use App\Http\Controllers\BlogPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'blog-post'], function () {
    Route::get('/', [BlogPostController::class, 'index']);
    Route::post('/', [BlogPostController::class, 'store']);
});

Route::group(['prefix' => 'blog-post-category'], function () {
    Route::get('/', [BlogPostCategoryController::class, 'index']);
    Route::post('/', [BlogPostCategoryController::class, 'store']);
    Route::put('/', [BlogPostCategoryController::class, 'update']);
    Route::delete('/', [BlogPostCategoryController::class, 'destroy']);
});
