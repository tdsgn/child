<?php

class Faq extends CActiveRecord
{

  public function relations()
  {
    return array(
      'comments'  =>  array(self::HAS_MANY, 'CommentsFaq', 'parent_id'),
    );
  }

  public static function model($className=__CLASS__)
  {
      return parent::model($className);
  }
}
