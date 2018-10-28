<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Index extends Base
{
    public function index()
    {
        $articleres=Db::table('article')
        ->order('time desc')
        ->paginate(5);
        $this->assign('articleres',$articleres);
        return $this->fetch();
    }
}
