<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;

function CurlPost($url, $data)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
    curl_setopt($curl, CURLOPT_URL, $url);
    if(!empty($data))
    {
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}
    //get请求
function CurlGet($url)
{
    return CurlPost($url, "");
}
// https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code 
class Wx extends Base
{
    public function wxtoken()
    {
        $request=\request();
        $code = $request->get('code');
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx68e2cce653ad491f&secret=a010a13e6a61faacbff170b0e84347bb&code={$code}&grant_type=authorization_code";
       
        $res = json_decode(CurlGet($url));
        
        $access_token = $res->access_token;
        $openid = $res->openid;
        $user = json_decode(CurlGet("https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN"));
        
        $user = json_encode($user);
        return $user;
    }
}
