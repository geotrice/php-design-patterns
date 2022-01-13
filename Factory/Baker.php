<?php
//Baker.php
//Part of the Factory Design Pattern.
//The Baker class is the class which orders the factory to produce a new object.
//In this case, the Baker has the factory produce baked goods.
//The Baker class is an abstract class because it includes both a concrete function (placeOrder) and an abstract function (buildObject).

abstract class Baker
{
  //This abstract function which is the factory method.
  //The factory "bakes" and returns a baked good.
  protected abstract function bake();
  
  //This concrete function of the Baker class tells the Factory to bake something.
  public function placeOrder()
  {
    $bakedGood = $this->bake();
    return $bakedGood;
  }
}
?>
