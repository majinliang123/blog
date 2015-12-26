<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/css/public.css">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/org/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL = "<?php echo Yii::app()->request->baseUrl;?>/assets/afterlogin/org/ueditor/";
		window.onload = function(){
			window.UEDITOR_CONFIG.initialFrameWidth = 900;
			window.UEDITOR_CONFIG.initialFrameHeight = 600;
			UE.getEditor('content');
		}

	</script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/afterlogin/org/ueditor/ueditor.config.js"></script>
	<title>Document</title>
</head>
<body>
	<body>
	 <?php $form=$this->beginWidget('CActiveForm', array(
		'enableClientValidation'=>true,
		'clientOptions'=>array(
 		'validateOnSubmit'=>true,
 		),
 	)); ?>
	<table class="table">
		<tr >
			<td class="th" colspan="10">添加栏目</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($categoryModel,'cname') ?></td>
			<td>
				<?php echo $form->textField($categoryModel,'cname') ?>
				<?php echo $form->error($categoryModel,'cname') ?></td>
		</tr>
		
		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="添加"/></td>
		</tr>
	</table>
	<?php $this->endWidget() ?>
</body>
</html>