<?php

class IndexController extends Controller
{
	public function actionIndex(){
		//echo Yii::app()->request->baseUrl;die;
		$sqlNew = "SELECT thumb,aid,title,info,time FROM {{article}}  ORDER BY time DESC LIMIT 5";
		$sqlHot = "SELECT thumb,aid,title,info,time FROM {{article}} WHERE type=1 ORDER BY time DESC LIMIT 5";

		$articleModel = Article::model();

		$articleNew = $articleModel->findAllBySql($sqlNew);
		$articleHot = $articleModel->findAllBySql($sqlHot);

		$data = array(
			'articleNew'	=> $articleNew,
			'articleHot'	=> $articleHot
		);

		$this->render('index', $data);
	}
	
}