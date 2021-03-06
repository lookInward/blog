<?php
namespace app\admin\controller;
use think\Db;

use app\admin\controller\Base;
use app\admin\model\Cate as CateModel;

class Cate extends Base
{
    public function lst()   
    {
        $list = CateModel::paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        if(request()->isPost()){
            $data=[
                'catename'=>input('catename'),
            ];

            $res = CateModel::where('id',$id)->update($data);
            if($res){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败','lst');
            }
            return;
        }
        $cates = CateModel::get($id);
        $this->assign('cates',$cates);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost()) {
            $data=[
                'catename' => input('catename'),
            ];
   
            if(Db::name('cate')->insert($data)){
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
        $cates = CateModel::get($id);
        $res = $cates->delete();
        if($res){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败','lst');
        };
    }
}
