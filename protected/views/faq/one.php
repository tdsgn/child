<div class="content">
  <div class="wrap">
    <div class="expert-list allpage">
      <h2><a href="<?=Yii::app()->createUrl(Yii::app()->controller->getId())?>">Все эксперты</a></h2>
      Задать вопрос и получить консультацию эксперта из разных областей
      <div class="expert-self">
        <div class="expert-photo-block">
          <img src="<?=Yii::app()->params['upl']['faq'].$row->image?>" class="expert-photo">
        </div>
        <div class="about">
          <a href="#" class="expert-name"><?=$row->name?></a>
          <br><br>
          <span class="expert-about"><?=$row->post?></span>
          <br>
          <p><?=$row->text?></p>
        </div>
      </div>
      <div class="clear"></div>
      <form method="post" action="/faq/addComment" id="addCommentFaq">
        <input name="username" type="text" value="Ваше имя" class="name"/>
        <input name="article_id" type="hidden" value="<?=$row->id?>"/>
        <textarea name="text" value="Оставить комментарий" class="text"></textarea>
        <input type="image" src="/images/submit.png" border="0" alt="Отправить" class="submit" />
      </form>
      <div class="clear"></div>

      <?foreach($row->comments as $comment):?>
        <div class="faq-item">
          <div class="quest">
            <div class="com-name"><?=$comment->name?></div>
            <p><?=$comment->text?></p>
          </div>
          <?if($comment->answer):?>
            <div class="answer">
              <?=$comment->answer?>
            </div>
          <?endif;?>
        </div>
      <?endforeach;?>

      <div class="clear"></div>
      <div class="more" style="margin: 0 auto;">
        <a href="#">Загрузить еще ответы</a>
      </div>
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
