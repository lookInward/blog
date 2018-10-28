<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
use app\index\model\Article as ArticleModel;

class Article extends Base
{
    public function index()
    {
        $arid=input('arid');
        $articles=Db::table('article')->find($arid); 

        $articleModel = new ArticleModel();
        $relatres=$articleModel->relat($articles['keywords'],$articles['id']);
        Db::table('article')->where('id','=',$arid)->setInc('click');
        $cates=Db::table('cate')->find($articles['cateid']);

        // 推荐的文章
        $recres=Db::table('article')->where(array('cateid'=>$cates['id'],'state'=>1))->limit(8)->select();

        $this->assign(array(
            'articles'=>$articles,
            'cates'=>$cates,
            'recres'=>$recres,

            // 相关阅读
            'relatres'=>$relatres   
        ));
        return $this->fetch('article');
    }


}
