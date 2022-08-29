<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\Core\UploadController;
use App\Http\Controllers\User\AuthTokenController;
use App\Http\Controllers\Blog\BlogPostController;
use App\Http\Controllers\Blog\BlogCategoryController;
use App\Http\Controllers\Setting\KeywordController;
use App\Http\Controllers\Setting\CommentController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\ProductCategoryController;
use App\Http\Controllers\Product\ProductMediaController;
use App\Http\Controllers\Product\ProductDescriptionController;
use App\Http\Controllers\Core\RequestLogController;
use App\Http\Controllers\Core\ExceptionLogController;


Route::prefix('v1')->group(function () {
    Route::post('auth/login', [AuthController::class, 'login']);
    Route::post('auth/otp/send', [AuthController::class, 'sendOtp']);
    Route::post('auth/otp/login', [AuthController::class, 'otpLogin']);


    Route::group(['middleware' => 'tokenLogin'], function () {
        Route::post('auth/user', [AuthController::class, 'user']);
        Route::post('auth/logout', [AuthController::class, 'logout']);
        Route::post('auth/refresh', [AuthController::class, 'refresh']);

        Route::post('request-log', [RequestLogController::class, 'index']);
        Route::post('exception-log', [ExceptionLogController::class, 'index']);

        Route::post('user', [UserController::class, 'index']);
        Route::post('user/show', [UserController::class, 'show']);
        Route::post('user/insert', [UserController::class, 'store']);
        Route::post('user/update', [UserController::class, 'update']);
        Route::post('user/delete', [UserController::class, 'destroy']);
        Route::post('user/profile', [UserController::class, 'profile']);
        Route::post('user/searchByRole', [UserController::class, 'searchByRole']);
        Route::post('user/check-username', [UserController::class, 'checkUsername']);

        Route::post('role', [RoleController::class, 'index']);
        Route::post('auth_token', [AuthTokenController::class, 'index']);
        Route::post('upload/insert', [UploadController::class, 'store']);
        Route::post('upload/list', [UploadController::class, 'index']);

        Route::post('keyword', [KeywordController::class, 'index']);
        Route::post('keyword/insert', [KeywordController::class, 'store']);
        Route::post('keyword/delete', [KeywordController::class, 'destroy']);

        Route::post('comment', [CommentController::class, 'index']);
        Route::post('comment/insert', [CommentController::class, 'store']);
        Route::post('comment/delete', [CommentController::class, 'destroy']);
        
        Route::post('setting', [SettingController::class, 'index']);
        Route::post('setting/insert', [SettingController::class, 'store']);
        Route::post('setting/update', [SettingController::class, 'update']);
        Route::post('setting/delete', [SettingController::class, 'destroy']);
        
        /*
        *  Blog routes
        */
        Route::post('blog-post', [BlogPostController::class, 'index']);
        Route::post('blog-post/show', [BlogPostController::class, 'show']);
        Route::post('blog-post/insert', [BlogPostController::class, 'store']);
        Route::post('blog-post/update', [BlogPostController::class, 'update']);
        Route::post('blog-post/delete', [BlogPostController::class, 'destroy']);
        
        Route::post('blog-category', [BlogCategoryController::class, 'index']);
        Route::post('blog-category/show', [BlogCategoryController::class, 'show']);
        Route::post('blog-category/insert', [BlogCategoryController::class, 'store']);
        Route::post('blog-category/update', [BlogCategoryController::class, 'update']);
        Route::post('blog-category/delete', [BlogCategoryController::class, 'destroy']);
        Route::post('blog-category/add-post', [BlogCategoryController::class, 'addPostToCategory']);
        Route::post('blog-category/delete-post', [BlogCategoryController::class, 'deletePostFromCategory']);

        /*
        *  Product routes
        */
        Route::post('product', [ProductController::class, 'index']);
        Route::post('product/show', [ProductController::class, 'show']);
        Route::post('product/insert', [ProductController::class, 'store']);
        Route::post('product/update', [ProductController::class, 'update']);
        Route::post('product/delete', [ProductController::class, 'destroy']);

        Route::post('product-category', [ProductCategoryController::class, 'index']);
        Route::post('product-category/show', [ProductCategoryController::class, 'show']);
        Route::post('product-category/insert', [ProductCategoryController::class, 'store']);
        Route::post('product-category/update', [ProductCategoryController::class, 'update']);
        Route::post('product-category/delete', [ProductCategoryController::class, 'destroy']);
        Route::post('product-category/add-post', [ProductCategoryController::class, 'addProductToCategory']);
        Route::post('product-category/delete-post', [ProductCategoryController::class, 'deleteProductFromCategory']);

        Route::post('product-media', [ProductMediaController::class, 'index']);
        Route::post('product-media/show', [ProductMediaController::class, 'show']);
        Route::post('product-media/insert', [ProductMediaController::class, 'store']);
        Route::post('product-media/update', [ProductMediaController::class, 'update']);
        Route::post('product-media/delete', [ProductMediaController::class, 'destroy']);

        Route::post('product-description', [ProductDescriptionController::class, 'index']);
        Route::post('product-description/show', [ProductDescriptionController::class, 'show']);
        Route::post('product-description/insert', [ProductDescriptionController::class, 'store']);
        Route::post('product-description/update', [ProductDescriptionController::class, 'update']);
        Route::post('product-description/delete', [ProductDescriptionController::class, 'destroy']);

    });
});
