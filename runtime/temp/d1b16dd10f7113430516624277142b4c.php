<?php /*a:3:{s:89:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/labexui/labex-ui.html";i:1540737959;s:82:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/base/head.html";i:1538842906;s:84:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/base/header.html";i:1540738298;}*/ ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>lookInward</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="lookInward博客,lookInward,刘洪瑞" />
    <meta name="description" content="lookInward博客,lookInward,刘洪瑞" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

    <link href="/static/style/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="/static/style/lady.css" type="text/css" rel="stylesheet" />
    <script type='text/javascript' src='images/js/ismobile.js'></script>
    <style>
        body {
            background: #efefef;
        }
       pre{
            color:#ccc;
            background:#282c34;
       }
        .position{
            color:#666;
            font-size:18px;
            margin-top:44px;
       }
          .position>a{
          color:#666;
       }
        .footerd {
            background: #222;
        }
        .overall .left {
            padding-top: 8px;
            overflow: unset;
        }

        .pagination {
            margin: 0;
        }

        .ladytop .nav .right {
    float: right;
}

        .ladytop {
            height: unset;
        }

        a {
            text-decoration: none !important;
        }

        .xnews2 {
            width: 750px;
            background: #fff;
            clear: both;
            overflow: hidden;
            border-radius: 4px;
            padding: 0;
            margin-bottom: 30px;
            cursor: pointer;
        }

        .xnews2:hover {
            box-shadow: 0px 0px 12px 3px #ddd;
        }

        .ladytop .nav .right .box a {
            color: #6a6a6a;
        }

        .ladytop .nav .right .box a {
            padding: 0 30px;
            margin: 0;
        }

        .overall {
            padding-top: 2px;
        }

        .ladytop {
            padding: 0;
            background: #fff;
            box-shadow: 0 0 5px 2px #ddd;
            position: fixed;
            top:0;
            z-index: 9;
        }

        .ladytop .nav {
            height: 50px;
        }
        .overall .right {
          margin-top: 8px;
          }

        .xnews2 .time a {
            height: 22px;
            line-height: 18px;
            border-radius: 14px;
        }

        .ladytop .nav .right .box a {
            padding: 0 30px;
            display: inline-block;
            height: 50px;
            line-height: 48px;
            margin: 0;
        }
        .ladytop .nav .right .box a:nth-child(1){
            background: blue !important;
            color: #fff;
        }

        .ladytop .nav .right .box a:hover {
            background: #08bf91;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<style>
    body {
        background: #fff;
    }
    pre{
      border:0;
      color:unset;
    }
</style>
<body>
    <div class="ladytop" style="background: #fff">
    <div class="nav">
        <div class="left">
            <a href="">
                <img style="height: 50px;" src="/static/images/logo.png" alt="wed114婚尚">
            </a>
        </div>
        <div class="right">
            <div class="box">
                <a href="#" rel='dropmenu209'>首页</a>
                <a href="#" rel='dropmenu209'>综合</a>
                <a href="#" rel='dropmenu209'>生活</a>
                <a href="/lookinward/public/labex-ui" rel='dropmenu209'>记事本</a>
                <a href="#" rel='dropmenu209'>组件库</a>
            </div>
            <div id="bdcs">
                <div class="bdcs-container">
                    <meta content="IE=9" http-equiv="x-ua-compatible">
                    <!-- 嵌入式 -->
                        <div class="input-group" style="transform:translateY(8px);padding-left: 50px;">
                            <form autocomplete="off" style="display: table;" method="get" action="<?php echo url('Search/index'); ?>">
                                <input type="text" placeholder="请输入关键词" class="form-control" name="keywords" autocomplete="off">
                                <span class="input-group-btn">
                                    <button style="background: blue;color:#fff;display:inherit;" class="btn btn-default" type="button">搜索</button>
                                </span>
                            </form>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="app">
      </div>
      <script src="/static/labex-ui/labex-ui.js"></script>
      <script src="/static/labex-ui/0.labex-ui.js"></script>



</body>

</html>
