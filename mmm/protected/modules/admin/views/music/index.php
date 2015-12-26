<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/css/public.css">
	<title>痴学少年</title>
</head>
<body>
	<table class="table">
		<tr>
			<td class="th" colspan="10">查看音乐</td>
		</tr>

		<tr>
			<td>MID</td>
			<td>歌曲</td>
			<td>歌手</td>
			<td>专辑</td>
			<td>当前播放</td>
			<td>操作</td>
		</tr>
		<?php foreach ($musicInfo as $v):?>
			<tr>
			    <td><?php echo $v->mid?></td>
				<td><?php echo $v->song?></td>
				<td><?php echo $v->singer?></td>
				<td><?php echo $v->special?></td>
				<td><?php echo $v->sel?></td>
				<td>
				    [<a href="<?php echo $this->createUrl('sel',array('mid'=>$v->mid)) ?>">选择</a>]
					[<a href="<?php echo $this->createUrl('del',array('mid'=>$v->mid, 'song' => $v->song)) ?>">删除</a>]
				</td>
			</tr>
		<?php endforeach?>
			
		
	</table>
	<div class="page">
		<?php 
			$this->widget('CLinkPager',array(
				'header'=>'',
				'firstPageLabel'=>'首页',
				'lastPageLabel'=>'尾页',
				'prevPageLabel'=>'上一页',
				'nextPageLabel'=>'下一页',
				'pages'=>$pages,
			));

		?>
	</div>
</body>
</html>