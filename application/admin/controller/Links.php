<?php
namespace app\admin\controller;
use think\Db;

use app\admin\controller\Base;
use app\admin\model\Links as LinksModel;

class Links extends Base
{
    public function lst()   
    {
        $list = LinksModel::paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function edit(){
        $id=input('id');
        $id=(int)$id;
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'url'=>input('url'),
                'note'=>input('note'),
            ];
            
            $validate = new \app\admin\validate\Links;
            $res=$validate->check($data);
 
            if(!$res){
                $this->error($validate->getError());
                die;
            }
            
            $res = LinksModel::where('id',$id)->update($data);
            if($res){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败','lst');
            }
            return;
        }
        $links = LinksModel::get($id);
        $this->assign('links',$links);
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost()) {
            $data=[
                'title' => input('title'),
                'url' => input('url'),
                'note' => input('note'),
            ];
            $validate = new \app\admin\validate\Links;
            if(!$validate->check($data)) {
                $this->error($validate->getError());
                die;
            }
            if(Db::name('links')->insert($data)){
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
        $admins = LinksModel::get($id);
        $res = $admins->delete();
        if($res){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败','lst');
        };
    }
}
