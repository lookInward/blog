<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{
   protected $rule = [
       'username' => 'require|max:12|unique:admin',
       'password' => 'require',
   ];

   protected $message = [
       'username.unique' => '管理员名称已存在',
       'username.require' => '请填写名称',
       'username.max' => '名称长度不能大于12个字符',
       'password.require' => '请填写密码',
    //    'password.between' => '密码长度介于6到15个字符之间',
   ];

   protected $scene = [
       'edit' => [
          'username'=>'require',
          'password'=>'require',
        ],
   ];
}
