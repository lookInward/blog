<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Search extends Base
{
    public function index()
    {
       $keywords=input('keywords');

       if($keywords){
           $searchres=Db::table('article')
           ->where('keywords','like','%'.$keywords.'%')
           ->order('id desc')
           ->paginate(5,$config=[
               'query'=>array(
                   'keywords'=>$keywords
               )
           ]);
           $this->assign(array(
               'searchres'=>$searchres,
               'keywords'=>$keywords
           ));
       }else{
           $this->assign(array(
               'searchres'=>null,
               'keywords'=>'暂无数据'
           ));
       }
       
       return $this->fetch('search');
    }
}
