<?php

class CommentsFaq extends CActiveRecord
{
  public function rules()
  {
    return array(
      array('name','required'),
      array('text','required'),
    );
  }

  public static function model($className=__CLASS__)
  {
      return parent::model($className);
  }

}
