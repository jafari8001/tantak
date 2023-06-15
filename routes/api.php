<?php

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
/* Auto-Use */

Route::prefix('v1')->group(function () {
    Route::post('auth/login', [AuthController::class, 'login']);
    Route::post('auth/otp/send', [AuthController::class, 'sendOtp']);
    Route::post('auth/otp/login', [AuthController::class, 'otpLogin']);
    Route::post('country_division', [CountryDivisionController::class, 'index']);


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

        /*
        * Auto-Routes
        */
    });
});
