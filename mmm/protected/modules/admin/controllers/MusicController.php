<?php 
/**
 * 音乐控制器
 */
class MusicController extends Controller{
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
                 'actions'=>array('index','del','add','sel'),
                 'users'=>array('@')//表明已经验证过了
             ),
            array(
                 'deny',
                 'users'=>array('*'),//拒绝所有用户
             ),
         );
     }


	/**
	 * 查看音乐
	 */
	public function actionIndex(){
		$cri=new CDbCriteria();
		$musicModel=Music::model();
		$total=$musicModel->count($cri);
		//定义分页类
		$pager=new CPagination($total);
		$pager->pageSize=5;
		$pager->applyLimit($cri);
		$musicInfo=$musicModel->findAll($cri);

		$data=array(
			'musicInfo'=>$musicInfo,
			'pages'=>$pager
		);
		$this->render('index',$data);
	}


	/**
	 * 添加音乐
	 */
	public function actionAdd(){
		$musicModel= new Music();
		$data=array(
			'musicModel'=>$musicModel,
		);
		if(isset($_POST['Music'])){
			$musicModel->attributes=$_POST['Music'];
			//上传音乐
			$musicModel->song=CUploadedFile::getInstance($musicModel,'song');
			
			//$musicModel->song->size=1024*1024*10;
			if($musicModel->song){
				$songName = $musicModel->song;				
				$musicModel->song->saveAs('uploads/' . $songName);
				$articleModel->song = $songName;
			}
			if($musicModel->save()){
			$this->redirect(array('index'));
		    }
		}
		
		$this->render('add',$data);
	}

	//删除音乐
	public function actionDel($mid, $song){
	    
		$musicModel= Music::model();
		if($musicModel->deleteByPk($mid)){
		    if(unlink('uploads/' . $song)){
		        $this->redirect(array('index'));
		    }
		}

	}
	
	//选择当前播放的音乐
	public function actionSel($mid){
	    $connection = Yii::app()->db;
        $sql = "UPDATE db_music SET sel = 0 " ;
        $command = $connection->createCommand($sql);
        $command->execute();  
        $sql = "UPDATE db_music SET sel = 1 WHERE mid = $mid" ;
        $command = $connection->createCommand($sql);
        $command->execute();  
	    $this->redirect(array('index'));
	}
}