<?php
namespace app\admin\controller;
use think\Db;

use app\admin\controller\Base;
use app\admin\model\Admin as AdminModel;

class Admin extends Base
{
    public function lst()   
    {
        $list = AdminModel::paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        if(request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>input('password'),
            ];

            $validate = new \app\admin\validate\Admin;
            $res=$validate->scene('edit')->check($data);
 
            if(!$res){
                $this->error($validate->getError());
                die;
            }

            $res = AdminModel::where('id',$id)->update($data);
            if($res){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败','lst');
            }
            return;
        }
        $admins = AdminModel::get($id);
        $this->assign('admins',$admins);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost()) {
            $data=[
                'username' => input('username'),
                'password' => input('password'),
            ];
            $validate = new \app\admin\validate\Admin;
            if(!$validate->check($data)) {
                $this->error($validate->getError());
                die;
            }
            if(Db::name('admin')->insert($data)){
                return $this->success('添加管理员成功','lst');
            }else {
                return $this->error('添加管理员失败','');
            }
           retrun ; 
        }
        
        return $this->fetch();
    }


    public function del(){
        $id=input('id');
        if($id==1){
            $this->error('禁止删除','lst');
            return;
        }
        $admins = AdminModel::get($id);
        $res = $admins->delete();
        if($res){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败','lst');
        };
    }

    public function logout(){
        session(null);
        dump(session('username'));
        die;
        $this->success('退出成功','Login/index');
    }
}
