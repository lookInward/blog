<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
function send_get($url){
    $options = array(
        'http'=>array(
            'method'=>'GET',
        )
        );
    $context = stream_context_create($options);
    $res = file_get_contents($url, false, $context);
    return $res;
}

class Wx extends Base
{
    public function wxtoken()
    {
        $code = $this->request->param('code');
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx68e2cce653ad491f&secret=a010a13e6a61faacbff170b0e84347bb&code={$code}&grant_type=authorization_code";
     
        $res = send_get($url);
        $res2 = json_decode($res,true);
        $access_token = $res2['access_token'];
         $openid = $res2['openid'];
        $url2 = "https://api.weixin.qq.com/cgi-bin/user/info?access_token={$access_token}&openid={$openid}&lang=zh_CN";
        $res3 = send_get($url);
        echo $access_token;
    }
}
