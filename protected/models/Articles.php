<?php

class Articles extends CActiveRecord
{

//  public function rules()
//  {
//    return array(
//      array('title','safe'),
//      array('text','safe'),
//    );
//  }

  public function relations()
  {
    return array(
      'comments'  =>  array(self::HAS_MANY, 'Comments', 'parent_id'),
    );
  }
  public static function model($className=__CLASS__)
  {
      return parent::model($className);
  }

}
