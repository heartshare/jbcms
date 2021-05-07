<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (env('APP_DEBUG') && is_dir(__DIR__ . '/../vendor/zircote/swagger-php')) {
    Route::get('swagger', function () {
        $openapi = \OpenApi\scan(app_path('Http/Controllers'));
        return response($openapi->toJson());
    });
}

Route::namespace('Console')->prefix(ADMIN_PATH)->group(function () {
    Route::get('/', 'IndexController@index');
});

Route::namespace('Web')->group(function () {
    Route::get('/{path?}', 'IndexController@index');
});
