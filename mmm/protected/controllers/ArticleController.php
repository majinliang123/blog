<?php

class ArticleController extends Controller
{
	public function actionIndex($aid){
		$articleInfo=Article::model()->findByPk($aid);
		$this->render('index',array('articleInfo'=>$articleInfo));
	}
}