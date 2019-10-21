<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


// 定义资源路由
// Route::resource('blog.comment','index/comment');

Route::resource('res','index/res');


// Route::get('think', function () {
//     return 'hello,Quetin!';
// });

// Route::get('hello/:name', 'index/hello');

// Route::rule('say/:name$','index/hello');


return [
    '__rest__' => [
        'res' => 'index/res'
    ],
    'hello/:name' => 'index/hello',
    'test/:na' => [
        'index/test',
        ['ext' => 'html'],
        ['na' => '\d+']
    ],
];
