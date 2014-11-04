<div class="content">
  <div class="wrap">
    <div class="articles allpage">
      <h1><a href="<?=Yii::app()->createUrl('article')?>">Статьи</a></h1>
      <div class="way">&nbsp;&nbsp;-&nbsp;&nbsp;<a href="<?=Yii::app()->createUrl('article')?>" class="this">В интересном положении</a></div>
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

      <?foreach($allArticles as $article):?>
      <div class="article">
        <div class="art-image">
          <a href="articles-item.html">
            <img src="<?=Yii::app()->params['upl']['news'].$article->image?>">
          </a>
        </div>
        <div class="art-header">
          <a href="/<?=Yii::app()->controller->getId()?>/<?=$article->id?>-<?=$article->alias?>"><?=$article->name?></a>
        </div>
        <div class="art-date"><?=$article->date_pub?></div>
        <div class="art-text">
          <?=$article->short_text?>
        </div>
      </div>

      <?endforeach;?>

      <div class="clear"></div>
      <div class="more">
        <a href="#">Загрузить еще статьи</a>
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

    <?$this->widget('WFaqRightSide');?>

  </div>
</div>
