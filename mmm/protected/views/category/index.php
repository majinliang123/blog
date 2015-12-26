
  <!--info end-->
    <ul class="bloglist">
    <?php foreach($articleInfo as $v): ?>
      <li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="<?php echo $this->createUrl('article/index',array('aid'=>$v->aid)) ?>" target="_blank"><?php echo $v->title ?></a></h2>
          <ul class="textinfo">
            <a href="<?php echo $this->createUrl('article/index',array('aid'=>$v->aid)) ?>"><img src="<?php echo Yii::app()->request->baseUrl;?>/uploads/<?php echo $v->thumb ?>"></a>
            <p> <?php echo $v->info ?></p>
          </ul>
          <ul class="details">
            <li class="icon-time"><a href="#"><?php echo date('Y-m-d',$v->time) ?></a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li>
    <?php endforeach ?>
    </ul>
    <!--bloglist end-->
    