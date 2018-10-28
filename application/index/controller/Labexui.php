<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Labexui extends Base
{
    public function index()
    {
        return $this->fetch('labex-ui');
    }
}
