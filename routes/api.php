<?php

use Illuminate\Http\Request;

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



$api = app('Dingo\Api\Routing\Router');


$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api'
],function($api) {

    //获取接口版本号
    $api->get('version', function() {
        return response('this is version v1');
    });

    //获取新闻分类
    $api->get('/categories','CategoriesController@index')
        ->name('api.categories.index');

    //后台管理系统获取新闻分类
    $api->get('/admin_categories','CategoriesController@admin_categories')
        ->name('api.categories.admin_categories');

    //获取所有新闻
    $api->get('/news','NewsController@index')
        ->name('api.news.index');

    $api->get('/news/{news}','NewsController@show')
        ->name('api.news.show');
    


});


$api->version('v2', function($api) {
    $api->get('version', function() {
        return response('this is version v2');
    });
});