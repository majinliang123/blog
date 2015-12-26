<!doctype html>
<html>
<head>
<Link Rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl;?>/uploads/name.ico">
<title>痴学少年</title>
<meta charset="UTF-8">
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/css/styles.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/css/animation.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/js/js.js"></script>
<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <nav id="nav">
    <ul>
      <li><a href="<?php echo $this->createUrl('/') ?>" >网站首页</a></li>
      <?php 
      		$artModel=Article::model();
      		$common=$artModel->common();
       ?>
       <?php foreach($common['nav'] as $v): ?>
       	 	<li><a href="<?php echo $this->createUrl('category/index',array('cid'=>$v['cid'])) ?>"><?php echo $v->cname ?></a></li>
       <?php endforeach ?>
      
      
    </ul>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
  </nav>
</header>
<!--header end-->
<div id="mainbody">
  <div class="info">
    <figure> <img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/images/art.jpg"  alt="Panama Hat">
      <figcaption><strong>渡人如渡己，渡已，亦是渡</strong><p> 当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。</p></figcaption>
    </figure>
   <div class="card">
      <h1>我的名片</h1>
      <p>网名：痴学少年</p>
      <p>职业：程序设计师</p>
      <p>Q Q ：1119338405</p>
      <p>Email：18233698150@163.com</p>
      <ul class="linkmore">
        <li><a  href="tencent://message?uin=1119338405" class="talk" title="给我留言"></a></li>
        <li><a  target="_blank" href="http://user.qzone.qq.com/1119338405/infocenter?ptsig=onLQaKhO6ouC45L*hvoNhQx5H7F*ZgTZRHtk0LWfzeo_" class="address" title="联系地址"></a></li>
        <li><a  href="mailto:18233698150@163.com" class="email" title="给我写信"></a></li>
        <li><a  target="_blank" href="http://weibo.com/p/1005055008003722/home?from=page_100505&mod=TAB#place" class="heart" title="关注我"></a></li>
      </ul>
    </div>
  </div>
  <div class="blank"></div>
  <div class="blogs">

<?php echo $content; ?>

<aside>
      <div class="tuijian">
        <h2>推荐文章</h2>
        <ol>
        <?php $i=0?>
        <?php foreach($common['new'] as $v): ?>
            <?php $i=$i+1?>
       	 	<li><a href="<?php echo $this->createUrl('article/index',array('aid'=>$v->aid)) ?>"><span><strong><?php echo $i?></strong></span><?php echo $v->title ?></a></li>
       	<?php endforeach ?>
        
        </ol>
      </div>
       <div class="viny">
        <dl>
          <?php foreach($common['music'] as $v): ?>
          <dt class="art"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/images/artwork.png" alt="专辑"></dt>
          <dd class="icon-song"><span></span><?php echo str_replace(".mp3", "", $v->song) ?></dd>
          <dd class="icon-artist"><span></span><?php echo $v->singer?></dd>
          <dd class="icon-album"><span></span>专辑：<?php echo $v->special?></dd>
          <dd class="icon-like"><span></span><a href="/">喜欢</a></dd>
          <dd class="music">
            <audio src="<?php echo Yii::app()->request->baseUrl;?>/uploads/<?php echo $v->song?>"  loop="true" controls >></audio>
          </dd>
          <!--也可以添加loop属性 音频加载到末尾时，会重新播放-->
     	 	<?php endforeach ?>
        </dl>
      </div>
      <div class="clicks">
        <h2>热门点击</h2>
        <ol>
        <?php foreach($common['hot'] as $v): ?>
       	 	<li><a href="<?php echo $this->createUrl('article/index',array('aid'=>$v->aid)) ?>"><?php echo $v->title ?></a></li>
       	<?php endforeach ?>
        </ol>
      </div>
      
     
    </aside>
  </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->
<footer>
  <div class="footer-mid">
    <div class="links">
      <h2>友情链接</h2>
      <ul>
        <li><a target="_blank" href="http://www.w3school.com.cn/">w3school</a></li>
         <li><a target="_blank" href="http://layer.layui.com/">layer</a></li>
        <li><a target="_blank" href="http://www.runoob.com/bootstrap/bootstrap-tutorial.html">bootstrap</a></li>
      </ul>
    </div>
   <div class="links">
      <h2>我的推荐</h2>
      <ul>
        <li><a target="_blank" href="http://www.bilibili.com/">哔哩哔哩</a></li>
        <li><a target="_blank" href="http://amazeui.org">amazeui</a></li>
        <li><a target="_blank" href="http://www.jeasyui.net/">EasyUi</a></li>
      </ul>
    </div>
    
    
   <div class="links">
      <h2>作者管理</h2>
      <ul>
        <li><a target="_blank" href="http://majinliang.top/mmm/index.php?r=admin/login">后台登录</a></li>
        <li><a target="_blank" href="http://majinliang.top/kod">代码管理</a></li>
        <li><a target="_blank" href="https://cn.wordpress.org/">WordPress</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p align="center">Copyright 2015 Design by 痴学少年</a></p>
  </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
</body>
</html>

