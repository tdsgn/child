<?php

class WFaqRightSide extends CWidget {

  public function run()
  {
    $criteria = new CDbCriteria();
    $criteria->order = 'RAND()';

    $this->render('WFaqRightSide', array(
      'row' => Faq::model()->find($criteria),
    ));
  }

} 