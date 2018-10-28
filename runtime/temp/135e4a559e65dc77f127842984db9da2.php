<?php /*a:5:{s:82:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/cate/cate.html";i:1538839814;s:82:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/base/head.html";i:1538842906;s:84:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/base/header.html";i:1538839814;s:83:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/base/right.html";i:1538839814;s:84:"/Users/liuhongrui/Downloads/wroot/lookinward/application/index/view/base/footer.html";i:1538839814;}*/ ?>
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
                <a href="/" rel='dropmenu209'>首页</a>
                <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('cate/index',array('cateid'=>$vo['id'])); ?>" rel='dropmenu209'><?php echo htmlentities($vo['catename']); ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
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
	<!--顶部通栏-->


	<div class="position">
		<a href="/">主页</a> >
		<a href="<?php echo url('cate/index',array('cateid'=>$cates['id'])); ?>"><?php echo htmlentities($cates['catename']); ?></a> > </div>

	<div class="overall">

		<div class="left">

			<?php if(is_array($articleres) || $articleres instanceof \think\Collection || $articleres instanceof \think\Paginator): $i = 0; $__LIST__ = $articleres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="xnews2" onClick="javascript:window.location.href = '<?php echo url('article/index',array('arid'=>$vo['id'])); ?>'">
				<div class="pic">
					<a target="_blank" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>">
						<img src="<?php if($vo['pic'] != ''): ?> <?php echo htmlentities($vo['pic']); else: ?>/static/images/common.jpg <?php endif; ?>" alt="" />
					</a>
				</div>
				<div class="dec">
					<h3>
						<a target="_blank" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>"><?php echo htmlentities($vo['title']); ?></a>
					</h3>
					<div class="time">发布时间：<?php echo htmlentities(date('Y-m-d H:i',!is_numeric($vo['time'])? strtotime($vo['time']) : $vo['time'])); ?></div>
					<p><?php echo htmlentities($vo['desc_content']); ?></p>
					<div class="time">
					    <?php
						  $arr=explode(',',$vo['keywords']);
						  foreach($arr as $k=>$v) {
							 echo "<a>$v</a>";
						 }
						?>
				    </div>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>

			<div class="pages">
				<div class="plist">
					<?php echo $articleres; ?>
				</div>
			</div>
		</div>

		<div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->

    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div class="hm-t-container" style="width: 298px;">
                <div class="hm-t-main">
                    <div class="hm-t-header">热门点击</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($clickres) || $clickres instanceof \think\Collection || $clickres instanceof \think\Paginator): $i = 0; $__LIST__ = $clickres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img">
                                <a data-pos="0" target="_blank" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>" class="hm-t-img-title" style="visibility: visible;">
                                    <span> <?php echo htmlentities($vo['title']); ?> </span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div style="width: 298px;" class="hm-t-container">
                <div class="hm-t-main">
                    <div class="hm-t-header">推荐阅读</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">

                            <?php if(is_array($recommentres) || $recommentres instanceof \think\Collection || $recommentres instanceof \think\Paginator): $i = 0; $__LIST__ = $recommentres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img">
                                <a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('article/index',array('arid'=>$vo['id'])); ?>" target="_blank"
                                    data-pos="0">
                                    <span> <?php echo htmlentities($vo['title']); ?> </span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>



    <div style="height:15px"></div>
</div>

	</div>
	<div class="footerd">
    <ul>
    <li>Copyright &#169; 2018  all rights reserved 版权所有   <a href="/" target="_blank" rel="nofollow">@lookInward</a></li> 
    </ul>
    </div>

	<div style="display:none;">
		<script src='goto/my-65537.js' language='javascript'></script>
		<script src="images/js/count_zixun.js" language="JavaScript"></script>
	</div>

</body>

</html>