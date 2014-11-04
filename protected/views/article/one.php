<div class="content">
  <div class="wrap">
    <div class="articles allpage">
      <h1><a href="<?=Yii::app()->createUrl(Yii::app()->controller->getId())?>">Статьи</a></h1>
      <div class="way">&nbsp;&nbsp;-&nbsp;&nbsp;<a href="<?=Yii::app()->createUrl(Yii::app()->controller->getId())?>">В интересном положении</a></div>
      <div class="clear"></div>
      <a class="category" href="javascript:void(0);" tabindex="1">Выбрать рубрику</a>
      <ul class="sub-menu" id="submenu">
        <li><a href="articles.html">Школа для родителей</a></li>
        <li><a href="articles.html">Развивайка</a></li>
        <li><a href="articles.html">Милосердие</a></li>
        <li><a href="articles.html">В интересном положении</a></li>
        <li><a href="articles.html">Детский вопрос</a></li>
        <li><a href="articles.html">Красота и здоровье</a></li>
        <li><a href="articles.html">Творчество</a></li>
        <li><a href="articles.html">Записки молодой мамы</a></li>
        <li><a href="articles.html">Психология</a></li>
        <li><a href="articles.html">Хобби и увлечения</a></li>
        <li><a href="articles.html">События</a></li>
        <li><a href="articles.html">Кругосветка</a></li>
        <li><a href="articles.html">Экспертное мнение</a></li>
        <li><a href="articles.html">Домашний очаг</a></li>
        <li><a href="articles.html">Мода и стиль</a></li>
        <li><a href="articles.html">Непридуманные истории</a></li>
      </ul>
      <script type="text/javascript">
        (function($) {
          $(function() {
            $('#submenu').autocolumnlist({
              columns: 3,
              min: 8
            });
          })
        })(jQuery)
      </script>
      <div class="article-item">

        <h2><?=$oneArticle->name?></h2>
        <div class="author">Автор: <span><?=$oneArticle->author?></span></div>
        <div class="tags">
          <a href="#">Здоровье</a>
          <a href="#">Питание</a>
          <a href="#">Диета</a>
          <a href="#">Сон</a>
          <a href="#">Лолипопы</a>
        </div>
        <img src="<?=Yii::app()->params['upl']['news'].$oneArticle->image?>" style="float: left; padding:0 30px 20px 0;" >
        <?=$oneArticle->long_text?>
        <br>
        <a href="#"><img src="/images/demo/social.png"></a>
        <hr>
      </div>

      <div class="comments">
        <span class="all">Комментарии (<?=count($oneArticle->comments)?>)</span>
        <form method="post" action="/article/addComment" id="addComment">
          <input name="username" type="text" value="Ваше имя" class="name"/>
          <input name="article_id" type="hidden" value="<?=$oneArticle->id?>"/>
          <textarea name="text" value="Оставить комментарий" class="text"></textarea>
          <input type="image" src="/images/submit.png" border="0" alt="Отправить" class="submit" />
        </form>
        <div class="clear"></div>

        <?foreach($oneArticle->comments as $comment):?>
        <div class="comment">
          <div class="com-name"><?=$comment->name?><span> - <?=U::cuteDate($comment->date_add) ?></span></div>
          <div class="com-text"><?=$comment->text?> </div>
        </div>
        <?endforeach;?>

      </div>
      <div class="clear"></div>
      <div class="more">
        <a href="#">Загрузить еще комментарии</a>
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
    <div class="expert-all">
      <h2>Консультация эксперта</h2>
      <div class="expert-text">Задать вопрос и получить консультацию спициалистов из разных областей</div>
      <a href="faq-expert.html">
        <img src="/images/demo/expert.jpg" class="expert-photo">
      </a>
      <br>
      <a href="faq-expert.html" class="expert-name">Джонни Сергеевич Депп</a>
      <br>
      <span class="expert-about">норм такой консультант</span>
    </div>
    <div class="clear"></div>
  </div>
</div>
