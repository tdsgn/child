<form  enctype="multipart/form-data" action="<?=Yii::app()->createUrl('/news/new');?>" method="post">
  <p>
    <input type="text" value="title here" name="News[title]" /><br/>
    <?php

    $this->widget('ImperaviRedactorWidget', array(
      // You can either use it for model attribute
      'model' => $m,
      'attribute' => 'text',

      // or just for input field
      'name' => 'News[text]',

      // Some options, see http://imperavi.com/redactor/docs/
      'options' => array(
        'lang' => 'ru',
        'imageUpload' => Yii::app()->createUrl('/news/upload'),
//      'toolbar' => false,
//      'iframe' => true,
//      'css' => 'wym.css',
      ),
    ));
    ?>

    <input type="hidden" value="" name="News[image]" /><input name="News[image]" type="file" />
    <input type="submit" value="Отправить"></p>

</form>