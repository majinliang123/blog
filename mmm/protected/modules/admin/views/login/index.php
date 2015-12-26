<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>痴学少年</title>

<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/login/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="login">

<div class="login_m">
	<div class="login_logo"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/login/images/logo.png" width="196" height="46"></div>
	<div class="login_boder">
		<div class="login_padding">
		 <?php $form = $this->beginWidget('CActiveForm') ?>
			<h2>用户名</h2>
			<label>
			 <?php echo $form->textField($loginForm,'username',array('id'=>'username','class'=>'txt_input txt_input2')) ?>
				
			</label>
			<h2>密码</h2>
			<label>
			 <?php echo $form->passwordField($loginForm,'password',array('id'=>'password','class'=>'txt_input txt_input')) ?>
				
			</label>
	
			<div class="rem_sub">
				<label>
					<input type="submit" class="sub_button" name="button" id="button" value="登录" style="opacity: 0.7;">
				</label> 
				<?php echo $form->error($loginForm,'password')?>
                <?php echo $form->error($loginForm,'username')?>
			</div>
			<?php $this->endWidget() ?>
		</div>
	</div><!--login_boder end-->
</div><!--login_m end-->

<br />
<br />

<p align="center"> More Templates <a href="http://www.majinliang.top" target="_blank" >痴学少年</a></p>

</body>
</html>