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

Route::get('/think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('/labex-ui', 'Labexui/index');
Route::get('/test2', 'Test2/index');
Route::get('/weixin_authorize', 'Wx/wxtoken');

return [

];
