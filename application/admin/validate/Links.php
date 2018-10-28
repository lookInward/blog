<?php
namespace app\admin\validate;
use think\Validate;
class Links extends Validate
{
   protected $rule = [
       'title' => 'require',
       'url' => 'require',
   ];

   protected $message = [
       'title.require' => '请填写名称',
       'url.require' => '请填写链接',
   ];

}
