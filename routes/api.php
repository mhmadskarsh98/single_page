<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\UserController;
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

Route::post('login', [AuthController::class,'login']);

Route::get('/users',[GeneralController::class,'users']);

Route::group( ['middleware'=>['jwt.auth']],function () {
    
    Route::get('my-post',[UserController::class, 'index']);

    Route::post('logout',[AuthController::class,'logout']);
});
