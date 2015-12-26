<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/css/public.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/org/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/afterlogin/org/ueditor/ueditor.config.js"></script>
	<title>Document</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data"></form>	
     <?php 
		$form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('enctype'=>'multipart/form-data')));
	 ?>
	<table class="table">
		<tr >
			<td class="th" colspan="10">添加音乐</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($musicModel,'singer') ?></td>
			<td>
				<?php echo $form->textField($musicModel,'singer') ?>
				<?php echo $form->error($musicModel,'singer') ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($musicModel,'special') ?></td>
			<td>
				<?php echo $form->textField($musicModel,'special') ?>
				<?php echo $form->error($musicModel,'special') ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($musicModel,'song') ?></td>
			<td>
				<?php echo $form->fileField($musicModel,'song') ?>
				<?php echo $form->error($musicModel,'song') ?>
			</td>
		</tr>
		
		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="发布"/>音乐的大小不允许超过10M</td>
		</tr>
	</table>
	<?php $this->endWidget() ?>
</body>
</html>