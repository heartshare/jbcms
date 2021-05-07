<?php

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

Route::namespace('API')->group(function () {
    Route::prefix('user')->middleware('auth:api')->group(function () {
        Route::get('/', 'UserController@index');
        Route::get('profile', 'ProfileController@index');
    });

    Route::get('/{path?}', 'IndexController@index')->where('path', '[\w\-\/]+');
});
