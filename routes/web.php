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
    Route::get('swagger.json', function () {
        $openapi = \OpenApi\scan(app_path('Http/Controllers/API'));
        return response($openapi->toJson());
    });
}

Auth::routes();

Route::namespace('Console')->prefix(ADMIN_PATH)->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('dashboard', 'IndexController@dashboard')->name('dashboard');
    Route::get('user', 'UserController@index')->name('user');
    Route::get('user/profile', 'UserController@profile')->name('user.profile');
});

Route::namespace('Web')->group(function () {
    Route::get('/{path?}', 'IndexController@index');
});
