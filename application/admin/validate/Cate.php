<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate
{
   protected $rule = [
       'catename' => 'require|max:12|unique',
   ];

   protected $message = [
       'catename.require' => '请填写名称',
       'username.max' => '名称长度不能大于12个字符',
   ];
}
