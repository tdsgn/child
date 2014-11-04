<div class="expert-all">
  <h2>Консультация эксперта</h2>
  <div class="expert-text">Задать вопрос и получить консультацию спициалистов из разных областей</div>
  <a href="<?=Yii::app()->createUrl('/faq/'.$row->id);?>">
    <img src="<?=Yii::app()->params['upl']['faq'].$row->image?>" class="expert-photo">
  </a>
  <br>
  <a href="<?=Yii::app()->createUrl('/faq/'.$row->id);?>" class="expert-name"><?=$row->name?></a>
  <br>
  <span class="expert-about"><?=$row->post?></span>
</div>
<div class="clear"></div>