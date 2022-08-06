<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProviderController;
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

Route::group(['middleware' => 'api',], function () {
    Route::group(['prefix' => 'auth',], function () {
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/signup', [AuthController::class, 'signup']);
        Route::get('/logout', [AuthController::class, 'logout']);
        Route::get('/refresh', [AuthController::class, 'refresh']);
        Route::get('/user-profile', [AuthController::class, 'userProfile']);
    });
    Route::group(['middleware' => ['jwt.auth'], ], function () {
        Route::group(['prefix' => 'car',], function () {
            Route::post('/create', [CarController::class, 'create']);
            Route::post('/update/{id}', [CarController::class, 'update']);
            Route::get('/delete/{id}', [CarController::class, 'delete']);
            Route::get('/', [CarController::class, 'index']);
            Route::get('/show/{id}', [CarController::class, 'show']);
        });
        Route::group(['prefix' => 'provider',], function () {
            Route::post('/create', [ProviderController::class, 'create']);
            Route::post('/update/{id}', [ProviderController::class, 'update']);
            Route::get('/delete/{id}', [ProviderController::class, 'delete']);
            Route::get('/', [ProviderController::class, 'index']);
            Route::get('/show/{id}', [ProviderController::class, 'show']);
        });
    });
});

