<?php

use App\Http\Controllers\Product\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\Core\UploadController;
use App\Http\Controllers\User\AuthTokenController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Setting\CountryDivisionController;
use App\Http\Controllers\Core\RequestLogController;
use App\Http\Controllers\Core\ExceptionLogController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\ProductVariationController;
use App\Http\Controllers\Product\ProductVariationCombinationController;
use App\Http\Controllers\Product\AddressController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\CategoryProductController;
use App\Http\Controllers\Product\ProductInfoController;
use App\Http\Controllers\Product\ProductTagController;
use App\Http\Controllers\Product\LogPriceController;
use App\Http\Controllers\Product\ProductImageController;
use App\Http\Controllers\Product\TagController;
use App\Http\Controllers\Product\WarehouseStockController;
use App\Http\Controllers\Product\BranchController;

use App\Http\Controllers\Product\LogStockController;
/* Auto-Use */

Route::prefix('v1')->group(function () {
    Route::post('auth/login', [AuthController::class, 'login']);
    Route::post('auth/otp/send', [AuthController::class, 'sendOtp']);
    Route::post('auth/otp/login', [AuthController::class, 'otpLogin']);
    Route::post('country-division', [CountryDivisionController::class, 'index']);


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

        Route::post('role', [RoleController::class, 'index']);
        Route::post('auth_token', [AuthTokenController::class, 'index']);
        Route::post('upload/insert', [UploadController::class, 'store']);
        Route::post('upload/list', [UploadController::class, 'index']);
        
        Route::post('setting', [SettingController::class, 'index']);
        Route::post('setting/insert', [SettingController::class, 'store']);
        Route::post('setting/update', [SettingController::class, 'update']);
        Route::post('setting/delete', [SettingController::class, 'destroy']);

		Route::post('country-division/show', [CountryDivisionController::class, 'show']);
		Route::post('country-division/insert', [CountryDivisionController::class, 'store']);
		Route::post('country-division/update', [CountryDivisionController::class, 'update']);
		Route::post('country-division/delete', [CountryDivisionController::class, 'destroy']);

		Route::post('product', [ProductController::class, 'index']);
		Route::post('product/show', [ProductController::class, 'show']);
		Route::post('product/insert', [ProductController::class, 'store']);
		Route::post('product/update', [ProductController::class, 'update']);
		Route::post('product/delete', [ProductController::class, 'destroy']);

		Route::post('productvariation', [ProductVariationController::class, 'index']);
		Route::post('productvariation/show', [ProductVariationController::class, 'show']);
		Route::post('productvariation/insert', [ProductVariationController::class, 'store']);
		Route::post('productvariation/update', [ProductVariationController::class, 'update']);
		Route::post('productvariation/delete', [ProductVariationController::class, 'destroy']);

		Route::post('productvariationcombination', [ProductVariationCombinationController::class, 'index']);
		Route::post('productvariationcombination/show', [ProductVariationCombinationController::class, 'show']);
		Route::post('productvariationcombination/insert', [ProductVariationCombinationController::class, 'store']);
		Route::post('productvariationcombination/update', [ProductVariationCombinationController::class, 'update']);
		Route::post('productvariationcombination/delete', [ProductVariationCombinationController::class, 'destroy']);

		Route::post('address', [AddressController::class, 'index']);
		Route::post('address/show', [AddressController::class, 'show']);
		Route::post('address/insert', [AddressController::class, 'store']);
		Route::post('address/update', [AddressController::class, 'update']);
		Route::post('address/delete', [AddressController::class, 'destroy']);

		Route::post('category', [CategoryController::class, 'index']);
		Route::post('category/show', [CategoryController::class, 'show']);
		Route::post('category/insert', [CategoryController::class, 'store']);
		Route::post('category/update', [CategoryController::class, 'update']);
		Route::post('category/delete', [CategoryController::class, 'destroy']);

		Route::post('categoryproduct', [CategoryProductController::class, 'index']);
		Route::post('categoryproduct/show', [CategoryProductController::class, 'show']);
		Route::post('categoryproduct/insert', [CategoryProductController::class, 'store']);
		Route::post('categoryproduct/update', [CategoryProductController::class, 'update']);
		Route::post('categoryproduct/delete', [CategoryProductController::class, 'destroy']);

		Route::post('productinfo', [ProductInfoController::class, 'index']);
		Route::post('productinfo/show', [ProductInfoController::class, 'show']);
		Route::post('productinfo/insert', [ProductInfoController::class, 'store']);
		Route::post('productinfo/update', [ProductInfoController::class, 'update']);
		Route::post('productinfo/delete', [ProductInfoController::class, 'destroy']);


		Route::post('comment', [CommentController::class, 'index']);
		Route::post('comment/show', [CommentController::class, 'show']);
		Route::post('comment/insert', [CommentController::class, 'store']);
		Route::post('comment/update', [CommentController::class, 'update']);
		Route::post('comment/delete', [CommentController::class, 'destroy']);

		Route::post('producttag', [ProductTagController::class, 'index']);
		Route::post('producttag/show', [ProductTagController::class, 'show']);
		Route::post('producttag/insert', [ProductTagController::class, 'store']);
		Route::post('producttag/update', [ProductTagController::class, 'update']);
		Route::post('producttag/delete', [ProductTagController::class, 'destroy']);

		Route::post('logprice', [LogPriceController::class, 'index']);
		Route::post('logprice/show', [LogPriceController::class, 'show']);
		Route::post('logprice/insert', [LogPriceController::class, 'store']);
		Route::post('logprice/update', [LogPriceController::class, 'update']);
		Route::post('logprice/delete', [LogPriceController::class, 'destroy']);

		Route::post('productimage', [ProductImageController::class, 'index']);
		Route::post('productimage/show', [ProductImageController::class, 'show']);
		Route::post('productimage/insert', [ProductImageController::class, 'store']);
		Route::post('productimage/update', [ProductImageController::class, 'update']);
		Route::post('productimage/delete', [ProductImageController::class, 'destroy']);

		Route::post('tag', [TagController::class, 'index']);
		Route::post('tag/show', [TagController::class, 'show']);
		Route::post('tag/insert', [TagController::class, 'store']);
		Route::post('tag/update', [TagController::class, 'update']);
		Route::post('tag/delete', [TagController::class, 'destroy']);

		Route::post('warehousestock', [WarehouseStockController::class, 'index']);
		Route::post('warehousestock/show', [WarehouseStockController::class, 'show']);
		Route::post('warehousestock/insert', [WarehouseStockController::class, 'store']);
		Route::post('warehousestock/update', [WarehouseStockController::class, 'update']);
		Route::post('warehousestock/delete', [WarehouseStockController::class, 'destroy']);

		Route::post('branch', [BranchController::class, 'index']);
		Route::post('branch/show', [BranchController::class, 'show']);
		Route::post('branch/insert', [BranchController::class, 'store']);
		Route::post('branch/update', [BranchController::class, 'update']);
		Route::post('branch/delete', [BranchController::class, 'destroy']);

		Route::post('branch', [BranchController::class, 'index']);
		Route::post('branch/show', [BranchController::class, 'show']);
		Route::post('branch/insert', [BranchController::class, 'store']);
		Route::post('branch/update', [BranchController::class, 'update']);
		Route::post('branch/delete', [BranchController::class, 'destroy']);

		Route::post('logstock', [LogStockController::class, 'index']);
		Route::post('logstock/show', [LogStockController::class, 'show']);
		Route::post('logstock/insert', [LogStockController::class, 'store']);
		Route::post('logstock/update', [LogStockController::class, 'update']);
		Route::post('logstock/delete', [LogStockController::class, 'destroy']);

        /*
        * Auto-Routes
        */
    });
});
