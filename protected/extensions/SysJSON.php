<?php
class SysJSON
{
  public static function decode($data)
  {
    return json_decode($data);
  }

  public static function encode($data)
  {
    $isArray = true;
    $keys = array_keys((array) $data);
    $prevKey = -1;

    foreach ($keys as $key)
    {
      if (!is_numeric($key) || $prevKey + 1 != $key)
      {
        $isArray = false;
        break;
      }
      else
      {
        $prevKey++;
      }
      unset($keys);
      $items = array();
    }
    foreach ($data as $key => $value)
    {
      $item = (!$isArray ? "\"$key\":" : '');

      if (is_array($value) || is_object($value))
      {
        $item .= self::encode($value);
      }
      elseif (is_null($value))
      {
        $item .= 'null';
      }
      elseif (is_bool($value))
      {
        $item .= $value ? 'true' : 'false';
      }
      elseif (is_string($value))
        $item .= '"' . preg_replace(
            '%([\\x00-\\x1f\\x22\\x5c])%e',
            'sprintf("\\\\u%04X", ord("$1"))',
            $value
          ) . '"';
      elseif (is_numeric($value))
        $item .= $value;
      else
        throw new Exception('Wrong argument.');

      $items[] = $item;
    }

    return ($isArray ? '[' : '{') .
    (isset($items) ? implode(',', $items) : '') .
    ($isArray ? ']' : '}');
  }
}
