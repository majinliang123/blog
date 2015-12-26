<?php
/**
 * 后台登录控制器
 */
class LoginController extends Controller{
	public $layout='/layouts/login';
	public function actionIndex(){

		//var_dump(Yii::app()->db);
		$loginForm=new LoginForm(); 
		if(isset($_POST['LoginForm'])){
			$loginForm->attributes=$_POST['LoginForm'];
			if($loginForm->validate()&&$loginForm->login()){
				Yii::app()->session['logintime']=time();
				$this->redirect(array('default/index'));
			}
		}
		

		$this->render('index',array('loginForm'=>$loginForm));
	}
	public function actionOut(){
		Yii::app()->user->logout();
		$this->redirect(array('index'));
	}
}
