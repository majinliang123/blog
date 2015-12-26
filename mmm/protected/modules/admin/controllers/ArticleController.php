<?php 
/**
 * 文章控制器
 */
class ArticleController extends Controller{
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
                'actions'=>array('index','del','add'),
                'users'=>array('@')//表明已经验证过了
            ),
            array(
                'deny',
                'users'=>array('*'),//拒绝所有用户
            ),
        );
    }


	/**
	 * 查看文章
	 */
	public function actionIndex(){
		$cri=new CDbCriteria();
		$articleModel=Article::model();
		$total=$articleModel->count($cri);
		//定义分页类
		$pager=new CPagination($total);
		$pager->pageSize=5;
		$pager->applyLimit($cri);
		$articleInfo=$articleModel->findAll($cri);

		$data=array(
			'articleInfo'=>$articleInfo,
			'pages'=>$pager
		);
		$this->render('index',$data);
	}


	/**
	 * 添加文章
	 */
	public function actionAdd(){
		$articleModel= new Article();
		$category=Category::model();
		$categoryInfo=$category->findAllBySql("SELECT cid,cname FROM {{category}}");
		$cateArr[]='请选择';
		foreach ($categoryInfo as $v) {
			$cateArr[$v->cid]=$v->cname;
		}
		$data=array(
			'articleModel'=>$articleModel,
			'cateArr'=>$cateArr
		);
		if(isset($_POST['Article'])){
			$articleModel->attributes=$_POST['Article'];
			//上传图片
			$articleModel->thumb=CUploadedFile::getInstance($articleModel,'thumb');
			if($articleModel->thumb){
				$preRand = 'img_' . time() . mt_rand(0, 9999);
				$imgName = $preRand . '.' . $articleModel->thumb->extensionName;				
				$articleModel->thumb->saveAs('uploads/' . $imgName);
				$articleModel->thumb = $imgName;

				//缩略图
				$path=dirname(Yii::app()->BasePath).'/uploads/';
				$thumb=Yii::app()->CThumb;
				$thumb->image=$path.$imgName;
				//缩略图的宽和高设置
				$thumb->width=130;
				$thumb->height=95;

				$thumb->mode=4;
				$thumb->directory=$path;
				$thumb->defaultName=$preRand;
				$thumb->createThumb();
				$thumb->save();
			}


			$articleModel->time=time();
			if($articleModel->save()){
			$this->redirect(array('index'));
		}
		}
		
		$this->render('add',$data);
	}

	//删除文章
	public function actionDel($aid){
		$articleModel=Article::model();
		if($articleModel->deleteByPk($aid)){
			$this->redirect(array('index'));
		}

	}
	/**
	 * 编辑文章
	 */
	public function actionEdit($aid){
		$articleModel=Article::model();
		$category=Category::model();
		$categoryInfo=$category->findAllBySql("SELECT cid,cname FROM {{category}}");
		$articleInfo=$articleModel->findByPk($aid);
		$cateArr[]='请选择';
		foreach ($categoryInfo as $v) {
			$cateArr[$v->cid]=$v->cname;
		}
		$data=array(
			'articleModel'=>$articleInfo,
			'cateArr'=>$cateArr
		);
		if(isset($_POST['Article'])){
			$articleInfo->attributes=$_POST['Article'];
			if($articleInfo->save()){
				$this->redirect(array('index'));
			}
		}
		$this->render('edit',$data);
	}
}