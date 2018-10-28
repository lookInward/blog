<?php
namespace app\admin\controller;

use app\admin\controller\Base;
use app\admin\model\Article as ArticleModel;
class Index extends Base
{
    public function index()
    {
        $list = ArticleModel::paginate(15);
        $this->assign('list',$list);
        return $this->fetch();
    }
}
