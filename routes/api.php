<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PostController::class)
    ->prefix('posts')->group(function () {
        Route::get('/', 'index');
        Route::get('/{post}', 'show');
    });

Route::controller(CategoryController::class)
    ->prefix('categories')->group(function () {
        Route::get('/', 'index');
        Route::get('/{category}', 'show');
    });
