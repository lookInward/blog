<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Base extends Controller
{
    public function initialize()
    {
        $this->right();
        $cateres=Db::name('cate')->order('id asc')->select();
        $this->assign('cateres',$cateres);
    }

    public function right() {
        $clickres=Db::table('article')->order('click desc')->limit(5)->select();
        $recommentres=Db::table('article')->where('state','=',1)->order('click desc')->limit(5)->select();

        $this->assign(array(
            'clickres'=>$clickres,
            'recommentres'=>$recommentres,
        ));
    }
}
