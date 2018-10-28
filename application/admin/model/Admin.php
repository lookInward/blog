<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model
{
    public function login($data){
        $user=Db::name('admin')->where('username','=',$data['username'])->find();
        if($user){
            if($user['password']==$data['password']){
                session('username',$user['username']);
                session('id',$user['id']);
                return 3;
            }else{
                return 2; //密码错误
            }
        }else{
            return 1; //用户名不存在
        }
    }
}