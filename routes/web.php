<?php

use Illuminate\Support\Facades\Auth;
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

// The auth routing
Auth::routes();

// The back-end routing
Route::namespace('Console')->prefix(ADMIN_PATH)->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    // Generate begin
    Route::get('ad', 'AdController@index')->name('ad.index');
    Route::get('ad/position-create', 'AdController@positionCreate')->name('ad.positionCreate');
    Route::post('ad/position-store', 'AdController@positionStore')->name('ad.positionStore');
    Route::get('ad/position-show', 'AdController@positionShow')->name('ad.positionShow');
    Route::get('ad/position-edit', 'AdController@positionEdit')->name('ad.positionEdit');
    Route::post('ad/position-update', 'AdController@positionUpdate')->name('ad.positionUpdate');
    Route::post('ad/position-destroy', 'AdController@positionDestroy')->name('ad.positionDestroy');
    Route::get('ad/ad', 'AdController@ad')->name('ad.ad');
    Route::get('ad/create', 'AdController@create')->name('ad.create');
    Route::post('ad/store', 'AdController@store')->name('ad.store');
    Route::get('ad/show', 'AdController@show')->name('ad.show');
    Route::get('ad/edit', 'AdController@edit')->name('ad.edit');
    Route::post('ad/update', 'AdController@update')->name('ad.update');
    Route::post('ad/destroy', 'AdController@destroy')->name('ad.destroy');
    Route::get('category', 'CategoryController@index')->name('category.index');
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    Route::post('category/store', 'CategoryController@store')->name('category.store');
    Route::get('category/show', 'CategoryController@show')->name('category.show');
    Route::get('category/edit', 'CategoryController@edit')->name('category.edit');
    Route::post('category/update', 'CategoryController@update')->name('category.update');
    Route::post('category/destroy', 'CategoryController@destroy')->name('category.destroy');
    Route::get('comment', 'CommentController@index')->name('comment.index');
    Route::get('comment/create', 'CommentController@create')->name('comment.create');
    Route::post('comment/store', 'CommentController@store')->name('comment.store');
    Route::get('comment/show', 'CommentController@show')->name('comment.show');
    Route::get('comment/edit', 'CommentController@edit')->name('comment.edit');
    Route::post('comment/update', 'CommentController@update')->name('comment.update');
    Route::post('comment/destroy', 'CommentController@destroy')->name('comment.destroy');
    Route::get('content', 'ContentController@index')->name('content.index');
    Route::get('content/create', 'ContentController@create')->name('content.create');
    Route::post('content/store', 'ContentController@store')->name('content.store');
    Route::get('content/show', 'ContentController@show')->name('content.show');
    Route::get('content/edit', 'ContentController@edit')->name('content.edit');
    Route::post('content/update', 'ContentController@update')->name('content.update');
    Route::post('content/destroy', 'ContentController@destroy')->name('content.destroy');
    Route::get('database', 'DatabaseController@index')->name('database.index');
    Route::get('database/create', 'DatabaseController@create')->name('database.create');
    Route::post('database/store', 'DatabaseController@store')->name('database.store');
    Route::get('database/show', 'DatabaseController@show')->name('database.show');
    Route::get('database/edit', 'DatabaseController@edit')->name('database.edit');
    Route::post('database/update', 'DatabaseController@update')->name('database.update');
    Route::post('database/destroy', 'DatabaseController@destroy')->name('database.destroy');
    Route::get('form', 'FormController@index')->name('form.index');
    Route::get('form/create', 'FormController@create')->name('form.create');
    Route::post('form/store', 'FormController@store')->name('form.store');
    Route::get('form/show', 'FormController@show')->name('form.show');
    Route::get('form/edit', 'FormController@edit')->name('form.edit');
    Route::post('form/update', 'FormController@update')->name('form.update');
    Route::post('form/destroy', 'FormController@destroy')->name('form.destroy');
    Route::get('index/dashboard', 'IndexController@dashboard')->name('index.dashboard');
    Route::get('index/logout', 'IndexController@logout')->name('index.logout');
    Route::get('nav', 'NavController@index')->name('nav.index');
    Route::get('nav/create', 'NavController@create')->name('nav.create');
    Route::post('nav/store', 'NavController@store')->name('nav.store');
    Route::get('nav/show', 'NavController@show')->name('nav.show');
    Route::get('nav/edit', 'NavController@edit')->name('nav.edit');
    Route::post('nav/update', 'NavController@update')->name('nav.update');
    Route::post('nav/destroy', 'NavController@destroy')->name('nav.destroy');
    Route::get('nav/link', 'NavController@link')->name('nav.link');
    Route::get('nav/link-create', 'NavController@linkCreate')->name('nav.linkCreate');
    Route::post('nav/link-store', 'NavController@linkStore')->name('nav.linkStore');
    Route::get('nav/link-show', 'NavController@linkShow')->name('nav.linkShow');
    Route::get('nav/link-edit', 'NavController@linkEdit')->name('nav.linkEdit');
    Route::post('nav/link-update', 'NavController@linkUpdate')->name('nav.linkUpdate');
    Route::post('nav/link-destroy', 'NavController@linkDestroy')->name('nav.linkDestroy');
    Route::get('role', 'RoleController@index')->name('role.index');
    Route::get('role/create', 'RoleController@create')->name('role.create');
    Route::post('role/store', 'RoleController@store')->name('role.store');
    Route::get('role/show', 'RoleController@show')->name('role.show');
    Route::get('role/edit', 'RoleController@edit')->name('role.edit');
    Route::post('role/update', 'RoleController@update')->name('role.update');
    Route::post('role/destroy', 'RoleController@destroy')->name('role.destroy');
    Route::get('rule', 'RuleController@index')->name('rule.index');
    Route::get('rule/create', 'RuleController@create')->name('rule.create');
    Route::post('rule/store', 'RuleController@store')->name('rule.store');
    Route::get('rule/show', 'RuleController@show')->name('rule.show');
    Route::get('rule/edit', 'RuleController@edit')->name('rule.edit');
    Route::post('rule/update', 'RuleController@update')->name('rule.update');
    Route::post('rule/destroy', 'RuleController@destroy')->name('rule.destroy');
    Route::get('segment', 'SegmentController@index')->name('segment.index');
    Route::get('segment/create', 'SegmentController@create')->name('segment.create');
    Route::post('segment/store', 'SegmentController@store')->name('segment.store');
    Route::get('segment/show', 'SegmentController@show')->name('segment.show');
    Route::get('segment/edit', 'SegmentController@edit')->name('segment.edit');
    Route::post('segment/update', 'SegmentController@update')->name('segment.update');
    Route::post('segment/destroy', 'SegmentController@destroy')->name('segment.destroy');
    Route::any('setting', 'SettingController@index')->name('setting.index');
    Route::any('setting/company', 'SettingController@company')->name('setting.company');
    Route::any('setting/site', 'SettingController@site')->name('setting.site');
    Route::any('setting/email', 'SettingController@email')->name('setting.email');
    Route::get('system', 'SystemController@index')->name('system.index');
    Route::get('system/about', 'SystemController@about')->name('system.about');
    Route::get('system/help', 'SystemController@help')->name('system.help');
    Route::get('system/log', 'SystemController@log')->name('system.log');
    Route::get('type', 'TypeController@index')->name('type.index');
    Route::get('type/create', 'TypeController@create')->name('type.create');
    Route::post('type/store', 'TypeController@store')->name('type.store');
    Route::get('type/show', 'TypeController@show')->name('type.show');
    Route::get('type/edit', 'TypeController@edit')->name('type.edit');
    Route::post('type/update', 'TypeController@update')->name('type.update');
    Route::post('type/destroy', 'TypeController@destroy')->name('type.destroy');
    Route::get('upgrade', 'UpgradeController@index')->name('upgrade.index');
    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');
    Route::get('user/show', 'UserController@show')->name('user.show');
    Route::get('user/edit', 'UserController@edit')->name('user.edit');
    Route::post('user/update', 'UserController@update')->name('user.update');
    Route::post('user/destroy', 'UserController@destroy')->name('user.destroy');
    Route::get('user/profile', 'UserController@profile')->name('user.profile');
    Route::get('user/password', 'UserController@password')->name('user.password');
    // Generate end
});

// The front-end routing
Route::namespace('Web')->group(function () {
    Route::get('/{path?}', 'IndexController@index')->where('path', '[\w\-\/]+');
});

// The swagger routing
if (env('APP_DEBUG') && is_dir(__DIR__ . '/../vendor/zircote/swagger-php')) {
    Route::get('swagger.json', function () {
        $openapi = \OpenApi\scan(app_path('Http/Controllers/API'));
        return response($openapi->toJson());
    });
}
