<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/js/js.js"></script>
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/css/styles.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/css/view.css" rel="stylesheet">
<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
      <h2 class="t_nav"><a href="/">文章</a><a href="/">读</a></h2>
      <h1 class="c_titile"><?php echo $articleInfo->title ?></h1>
      <p class="box">发布时间:<?php echo  date('Y-m-d',$articleInfo->time) ?>&nbsp;&nbsp;&nbsp;分类：<strong><?php echo $articleInfo['cate']->cname ?></p>
      <ul><FONT face=宋体>
        <?php echo $articleInfo->content ?>
        </FONT>
      </ul>
      <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <a class="shareCount"></a> </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
        <!-- Baidu Button END --> 
      </div>
    </div>
  </div>
    <!--bloglist end-->
    