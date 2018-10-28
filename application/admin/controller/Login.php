<?php
namespace app\admin\controller;
use think\Controller;
use think\captcha\Captcha;
use app\admin\model\Admin as AdminModel;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $data=input('post.');
            $captcha = new Captcha();
            if(!$captcha->check($data['code'])){
                $this->error('验证码错误');
                die;
            }
            
            $admin=new AdminModel();
            if($admin->login($data)==1){
                $this->error('用户不存在');
            }else if($admin->login($data)==2){
                $this->error('密码错误');
            }else{
                $this->success('正在跳转','index/index');
            }
        }
        return $this->fetch('login');
    }
}
