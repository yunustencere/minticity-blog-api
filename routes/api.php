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
    // Route::get('/{id}', [TaskController::class, 'show']);
    Route::post('/', [BlogPostController::class, 'store']);
    // Route::put('/', [TaskController::class, 'update']);

    // Route::get('/getByOrder', [TaskController::class, 'getByOrder']);


    // Route::put('/{id}', 'Task\TaskController@update');
    // Route::delete('/{id}', 'Task\TaskController@destroy');
});

Route::group(['prefix' => 'blog-post-category'], function () {
    Route::get('/', [BlogPostCategoryController::class, 'index']);
    Route::post('/', [BlogPostCategoryController::class, 'store']);
});
