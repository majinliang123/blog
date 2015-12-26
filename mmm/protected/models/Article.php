<?php
/**
 * 文章
 */
class Article extends CActiveRecord{
	/**
	 * 用于返回类的
	 * 是必不可取的函数
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	} 
	/**
	 * 
	 * 用于返回表名
	 * 是必不可缺的函数
	 */
	public function tableName(){
		return "{{article}}";
	}
	/**
	 * 规定标签
	 */

	public function attributeLabels(){
		return array(
			'title' => '标题',
			'type'  => '类型',
			'cid'   => '栏目',
			'thumb' => '缩略图',
			'info'  => '摘要',
			'content'=>'内容',
		);
	}
 	public function rules(){
	 	return array(
			array('title','required','message'=>'标题必填'),
			array('type','in','range'=>array(0,1),'message'=>'请选择正确的类型'),
			array('cid','check_cate'),
			array('info','required','message'=>'摘要必填'),
			array('thumb','file','types'=>'jpg,gif,jpeg,png','message'=>'没有用上传或者类型不符'),
	 	  	array('content','required','message'=>'内容必填')
	 	);
 	}


 	public function check_cate(){
 		if($this->cid<=0){
 			$this->addError('cid','请选择分类');
 		}
 	}
 	//关联
 	public function relations(){
 		return array(
 			'cate'=>array(self::BELONGS_TO,'Category','cid')
 		);
 	}


 	public function common(){
 		$common=array();
 		//选择音乐
 		$sql="SELECT song,singer,special FROM {{music}} WHERE sel=1";
 		$common['music']=Music::model()->findAllBySql($sql);
 		//音乐学则结束
 		$sql="SELECT cname,cid FROM {{category}} LIMIT 10";
 		$common['nav']=Category::model()->findAllBySql($sql);
 		$sql="SELECT title,aid FROM {{article}} WHERE type=1 ORDER BY time DESC LIMIT 7 ";
 		$common['hot']=$this->findAllBySql($sql);
 		$sql="SELECT title,aid FROM {{article}}  ORDER BY time DESC LIMIT 7 ";
 		$common['new']=$this->findAllBySql($sql);
 		return $common;
 	}
}