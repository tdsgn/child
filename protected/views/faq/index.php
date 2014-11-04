<div class="content">
  <div class="wrap">
    <div class="expert-list">
      <h2>Консультация эксперта</h2>
      Задать вопрос и получить консультацию эксперта из разных областей

      <?foreach($rows as $row):?>
        <div class="expert">
          <a href="<?=Yii::app()->createUrl(Yii::app()->controller->getId().'/'.$row->id)?>">
            <img src="<?=Yii::app()->params['upl']['faq'].$row->image?>" class="expert-photo">
          </a>
          <br>
          <a href="<?=Yii::app()->createUrl(Yii::app()->controller->getId().'/'.$row->id)?>" class="expert-name"><?=$row->name?></a>
          <br><br>
          <span class="expert-about"><?=$row->post?></span>
        </div>
      <?endforeach;?>

      <div class="clear"></div>
    </div>
    <div class="journal">
      <h2>Новый номер</h2>
      <a href="journal.html">
        <img src="/images/demo/journal.jpg" />
      </a>
      <br>
      №8 (29) 2014
    </div>
    <div class="clear"></div>
  </div>
</div>
