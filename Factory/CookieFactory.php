<?php
//CookieFactory.php
//
include_once('Baker.php');
include_once('ChocolateChipCookie.php');

class CookieFactory extends Baker
{
  //Define the abstract function of the Baker class.
  //The Cookie Factory bakes cookies.
  protected function bake()
  {
    $cookie = new ChocolateChipCookie();
    return($cookie->getProperties());
  }
}
?>
