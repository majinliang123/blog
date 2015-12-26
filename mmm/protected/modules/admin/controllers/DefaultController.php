<?php
//这里是首页

class DefaultController extends Controller
{
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
                'actions'=>array('index'),
                'users'=>array('@')//表明已经验证过了
            ),
            array(
                'deny',
                'users'=>array('*'),//拒绝所有用户
            ),
        );
    }

	public function actionIndex()
	{
		$this->render('index');
	}
}