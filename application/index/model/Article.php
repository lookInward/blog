<?php
namespace app\index\model;
use think\Model;
use think\Db;

class Article extends Model
{
    public function relat($data,$id){
        $arr=explode(',',$data);
        static $relatres=array();

        foreach ($arr as $k=>$v){
            $map['keywords']=['like','%',$v,'%'];
            $map['id']=['neq',$id];
            $tempres=Db::table('article')->where($map)->order('id desc')->limit(8)->select();
            $relatres=array_merge($relatres,$tempres);
        }
        if($relatres)
        {
            $relatres = arr_unique($relatres);
            return $relatres;
        }
    }
}




