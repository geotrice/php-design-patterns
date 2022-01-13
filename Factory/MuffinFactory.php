<?php
//MuffinFactory.php
//MuffinFactory is part of the Factory pattern.

include_once('Baker.php')
include_once('BlueberryMuffin.php');

class MuffinFactory extends Baker
{
  protected function bake()
  {
    $muffin = new BlueberryMuffin();
    return($muffin->getProperties());
  }
}
?>
