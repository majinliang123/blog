<?php

class CategoryController extends Controller
{
	public function actionIndex($cid){
		$sql="SELECT thumb,aid,title,info,time FROM {{article}} WHERE cid=$cid ORDER BY time DESC";
		$articleInfo=Article::model()->findAllBySql($sql);
		$this->render('index',array('articleInfo'=>$articleInfo));
	}
}