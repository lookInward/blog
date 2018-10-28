<?php
namespace app\admin\controller;
use think\Controller;

class Base extends Controller
{
    public function initialize(){
        if(!session('username')){
            $this->error('权限错误');
        } 
    }
}
