<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>《痴学少年》后台管理平台</title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/css/main.css"/>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo $this->createUrl('default/index') ?>">首页</a></li>
                <li><a target="_blank" href="http://majinliang.top">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><?php echo Yii::app()->user->name;?> &nbsp;&nbsp;</li>
                <li><?php echo date('Y-m-d',Yii::app()->session['logintime']) ?></li>
                <li><a href="<?php echo $this->createUrl('login/out') ?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo $this->createUrl('category/index') ?>"><i class="icon-font">&#xe008;</i>查看栏目</a></li>
                        <li><a href="<?php echo $this->createUrl('category/add') ?>"><i class="icon-font">&#xe005;</i>添加栏目</a></li>
                        <li><a href="<?php echo $this->createUrl('article/add') ?>"><i class="icon-font">&#xe006;</i>发表文章</a></li>
                        <li><a href="<?php echo $this->createUrl('article/index') ?>"><i class="icon-font">&#xe004;</i>查看文章</a></li>
                        <li><a href="<?php echo $this->createUrl('music/index') ?>"><i class="icon-font">&#xe012;</i>查看音乐</a></li>
                        <li><a href="<?php echo $this->createUrl('music/add') ?>"><i class="icon-font">&#xe052;</i>添加音乐</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo $this->createUrl('user/password') ?>"><i class="icon-font">&#xe017;</i>修改密码</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用《痴学少年》后台管理平台</span></div>
        </div>
        <?php echo $content ?>
    </div>
    <!--/main-->
</div>
</body>
</html>