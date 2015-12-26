<?php
/**
 * 音乐
 */
class Music extends CActiveRecord{
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
		return "{{music}}";
	}
	/**
	 * 规定标签
	 */

	public function attributeLabels(){
		return array(
			'singer'  => '歌手',
			'special' => '专辑',
			'song'    => '歌曲',
			'sel'    => '当前播放'
		);
	}
 	public function rules(){
	 	return array(
		    array('singer','required','message'=>'歌手必填'),
			array('special','required','message'=>'专辑必填'),
			array('song','file','types'=>'mp3','message'=>'没有用上传或者类型不符')
	 	);
 	}
}