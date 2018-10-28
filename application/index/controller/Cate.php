<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
use app\index\model\Cate as CateModel;
class Cate extends Base
{
    public function index()
    {
        $cateid=input('cateid');

        // 查询栏目名
        $cates=Db::table('cate')->find($cateid);
        $this->assign('cates',$cates);
        // 查询当前栏目下的文章

        $article=new CateModel();
        $articleres=$article->getArticle($cates);
        $this->assign('articleres',$articleres);
        return $this->fetch('cate');
    }
}
