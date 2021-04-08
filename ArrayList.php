<?php

class ArrayList
{
  public $arrayList;
  public $size = 0;

  public function __construct($arr = '')
  {
    if (is_array($arr)) {
      $this->arrayList = $arr;
      $this->size = count($arr);
    } else {
      $this->arrayList = array();
    }
  }

  public function add($obj)
  {
    $this->arrayList[] = $obj;
    $this->size++;
  }

  public function get($index)
  {
    if (is_int($index) && $index < $this->size && $index >= 0) {
      return $this->arrayList[$index];
    } else {
      exit('ERROR in get');
    }
  }
}

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo '<pre>';
var_dump($listInteger->arrayList);
echo $listInteger->get(1) . '<br>';
echo $listInteger->get(-1) . '<br>';
