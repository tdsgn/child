<?php

class News extends CActiveRecord
{

  public function rules()
  {
    return array(
      array('title','safe'),
      array('text','safe'),
    );
  }

  public static function model($className=__CLASS__)
  {
      return parent::model($className);
  }

}
