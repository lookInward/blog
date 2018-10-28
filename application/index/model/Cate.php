<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Cate extends Model
{
    public function getArticle($data){
        $articles = Db::table('article')
        ->where(array('cateid'=>$data))
        ->paginate(5);

        return $articles;
    }
}