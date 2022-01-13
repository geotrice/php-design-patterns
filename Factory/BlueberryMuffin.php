<?php
//BlueberryMuffin.php
//BlueberryMuffin is part of the Factory pattern

include_once('BakedGood');
class BlueberryMuffin implements BakedGood
{
  private $bakedMuffin;
  
  public function getProperties()
  {
    $this->bakedMuffin = "This is a yummy blueberry muffin.";
    return $this->bakedMuffin;
  }
}
?>
