<?php
//ChocolateChipCookie.php
//ChocolateChipCookie is part of the Factory pattern.

include_once('BakedGood.php');

class ChocolateChipCookie implements BakedGood
{
  private $bakedCookie;
  
  public function getProperties()
  {
    $this->bakedCookie = "This is a warm Chocolate Chip Cookie.";
    return $this->bakedCookie;
  }
}
?>
