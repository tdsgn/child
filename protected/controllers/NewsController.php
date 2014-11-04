<?php

class NewsController extends FrontEndController
{

  public function actionIndex()
  {
    $this->render('index');
  }

  public function actionNew()
  {
    $postData = Yii::app()->request->getPost('News');
    $m = new News;

    if($postData)
    {
      $m->attributes = $postData;

      if( $postData['image'] )
      {
        $file = CUploadedFile::getInstance($m, 'image');
        $uniqFname = md5(time()). '_' .$file->getName();
        $m->image = $uniqFname;
        $path = Yii::getPathOfAlias('imgFolder').'/'.$uniqFname;

        if($m->save())
        {
          $file->saveAs($path);
          $image = new Image($path);
          $image->resize(400, 400);
          $image->save();
        }
      }
      $m->save();
    }
    $this->render('new', array('m' => $m));
  }

  public function actionUpload()
  {
    $dir = Yii::getPathOfAlias('imgFolder').'/';

    $_FILES['file']['type'] = strtolower($_FILES['file']['type']);

    if ($_FILES['file']['type'] == 'image/png'   || $_FILES['file']['type'] == 'image/jpg'   || $_FILES['file']['type'] == 'image/gif'
      || $_FILES['file']['type'] == 'image/jpeg'
      || $_FILES['file']['type'] == 'image/pjpeg')
    {
      // setting file's mysterious name
      $filename = md5(time()).'_'.$_FILES['file']['name'];
      $file = $dir.$filename;

      // copying
      move_uploaded_file($_FILES['file']['tmp_name'], $file);

      // displaying file
      $array = array(
        'filelink' => Yii::app()->createUrl('/'. Yii::app()->params['upl']['wysiwyg'].$filename),
      );

      echo stripslashes(json_encode($array));
    }

  }

}