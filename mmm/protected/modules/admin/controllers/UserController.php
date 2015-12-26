<?php 
	/**
	* 后台登录控制 
	*/
	class UserController extends Controller{
		//后台权限验证
		    public function filters(){
		        return array(
		            'accessControl',
		        );
		    }
		    public function accessRules(){
		        return array(
		            array(
		                'allow',
		                'actions'=>array('password'),
		                'users'=>array('@')//表明已经验证过了
		            ),
		            array(
		                'deny',
		                'users'=>array('*'),//拒绝所有用户
		            ),
		        );
		    }


		public function actionPassword(){
			$userModel=User::model();
			if(isset($_POST['User'])){
				$userInfo=$userModel->find('username=:name',array(':name'=>Yii::app()->user->name));
				$userModel->attributes=$_POST['User'];
				if($userModel->validate()){
					$password=md5($_POST['User']['password1']);

					if($userModel->updateByPk($userInfo->uid,array('password'=>$password))){
						Yii::app()->user->setFlash('success','密码更改成功');
					}
					
				}
			}
			$this->render('index',array('userModel'=>$userModel));
		}
	}
	
?>