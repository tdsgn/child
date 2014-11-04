<?php
$menu = array(
  'site' => 'Главная',
  'article' => 'Статьи',
  'journal' => 'Журнал',
  'forum' => 'Форум',
  'project' => 'Наши проекты',
  'faq' => 'Консультация',
  'poster' => 'Афиша',
  'book' => 'Адресная книга',
);
?>

<div class="header-block-bottom">
  <ul class="topmenu">
    <?foreach( $menu as $ctrl => $label ):?>
      <li <?if( Yii::app()->controller->getId() == $ctrl ):?> class="current" <?endif;?>>
        <?if($ctrl === 'site'):?>
            <a href="/"><?=$label?></a>
          <?else:?>
            <a href="<?=Yii::app()->createUrl($ctrl)?>"><?=$label?></a>
        <?endif;?>
      </li>
    <?endforeach;?>
  </ul>
</div>