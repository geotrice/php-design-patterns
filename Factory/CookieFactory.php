<?php
//CookieFactory.php
//
include_once('Baker.php');
include_once("ChocolateChipCookie.php);

class CookieFactory extends Baker
{
  protected function bake()
  {
    $cookie = new ChocolateChipCookie();
    return($cookie->getProperties());
  }
}
?>
