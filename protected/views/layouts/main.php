<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ДетскийВопрос.рф</title>
  <meta name="Robots" content="all, follow">
  <meta name="Author" content="© 2014 Т-студия">
  <meta name="Copyright" content="© 2014 Т-студия">
  <meta name="description" lang="ru" content="">
  <meta name="keywords" lang="ru" content="">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/png" />
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.bxslider.css" type="text/css" />
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.columnizer.js"></script>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>

<header>
  <div class="wrap">
    <a href="index.html" class="logo">
      <img src="/images/logo.png" border="0" />
      <br>
      ДетскийВопрос.рф
    </a>
    <div class="header-block-top">
      <div class="social">
        Социальные сети:
        <div class="fb" onClick="window.open('http://facebook.com','windowname')"></div>
        <div class="vk" onClick="window.open('http://vk.com','windowname')"></div>
        <div class="clear"></div>
      </div>
      <form class="search">
        <input type="image" src="/images/search.png" class="search-button" />
        <input type="search" name="search" />
      </form>
    </div>

    <?php $this->widget('WMenu');?>


    <div class="clear"> </div>
  </div>

</header>
<div class="main">

	<?php echo $content; ?>

<?php $this->widget('WFooter');?>

</div>
</body>
</html>
