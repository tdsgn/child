<?php
/**
 * SysMessage - Расширение, отвечающее за стандартизацию ответов пользователю.
 *
 *
 * @author Maxim Pudalov <maksim.pudalov@gmail.com>
 * @version 606
 * @package EgalCore.system.extensions
 * @copyright Samany
 * @link http://egalcore.ru/
 * @since 0.9
 */
class SysMessage
{

  public static $styleArray = false;
  /**
   * Выводит сообщение об ошибке, для различных систем по разному.
   * @param $message (string) - сообщение об ошибке.
   * 	Может быть в формате строки, или же в формате ошибка CActiveRecord
   * @param $title (string) - заголовок ошибки
   */
  public static function showError($message, $title = 'Системное сообщение' )
  {
    $params = array(
      'type'		=> 'error',
      'success'	=> false
    );
    self::showMessage($message, $title, $params);
    exit;
  }
  /**
   * Выводит сообщение ообщего назначения, для различных систем по разному.
   * @param $message (string) - текстовое сообщение.
   * 	Может быть в формате строки, или же в формате ошибка CActiveRecord
   * @param $title (string) - заголовок
   * @param $params (array) - дополнительные параметры
   */
  public static function showMessage($message, $title = 'Сообщение', $params = array() )
  {
    if (is_array($message))
    {
      $message=self::arrayToString($message);

    }
    $params['title'] = $title;
    $params['msg'] = $message;
    $params['success'] = isset($params['success']) ? $params['success'] : true;
    $params['type']    = isset($params['type']) ? $params['type'] : 'success';
    if ((isset($_GET['xml']) && $_GET['xml']==1))
    {
      echo Yii::app()->converter->toXml($params);
    }
    else
    {
      echo SysJSON::encode($params);
    }
    exit;
  }
  /**
   * Выводит базовое сообщение, что всё Ok
   */
  public static function ok()
  {
    self::showMessage(null, 'Сообщение');
  }
  /**
   * Просто печатает на экран $message и выходит.
   * @param $message (string)
   */
  public static function showBlankError($message)
  {
    echo $message;
    exit;
  }
  /**
   * Системный метод - парсит ошибку CActiveRecord в тескт.
   * @param $array (array)
   * @return string
   */
  private static function arrayToString($array)
  {
    $text = "";

    if(is_array($array))
    {

      foreach ($array as $key => $value) {
        $text.= self::arrayToString($value)."\n";
      }

    } else {
      if (self::$styleArray)
      {
        return '<p>' . (string)$array . '</p>';
      }
      return (string)$array;
    }
    return $text;
  }
}
