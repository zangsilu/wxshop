<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::rule('api/:version/banner/:id','api/:version.BannerController/view','get');
Route::rule('api/:version/theme','api/:version.ThemeController/index','get');
Route::rule('api/:version/theme/:id','api/:version.ThemeController/read','get');
Route::rule('api/:version/spider','api/:version.SpiderController/index','get');
Route::rule('api/:version/product','api/:version.ProductController/index','get');
Route::rule('api/:version/category','api/:version.CategoryController/index','get');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
