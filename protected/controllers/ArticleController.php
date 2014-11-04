<?php

class ArticleController extends FrontEndController
{

	public function actionIndex()
	{
    $this->render('index', array(
      'allArticles' => Articles::model()->findAll())
    );
  }

  public function actionOne()
  {
    Yii::app()->clientScript->registerScriptFile('/js/adobe.js');
    $id = Yii::app()->request->getParam('id');

    $this->render('one', array(
      'oneArticle' => Articles::model()->findByPk($id))
    );
  }

  public function actionAddComment()
  {
    $data = Yii::app()->request->getPost('DataComment');

    $m = new Comments;
    $m->parent_id = $data['article_id'];
    $m->name = $data['username'];
    $m->text = $data['text'];
    $m->date_add = date('Y-m-d H:i:s', time());

    if($m->save())
    {
      SysMessage::showMessage('Добавлено');
    }
    else
    {
      SysMessage::showError($m->getErrors());
    }
  }

}