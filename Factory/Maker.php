<?php
//Maker.php
//Part of the Factory Design Pattern.
//The Maker class is the class which orders the factory to produce a new object.
//The Maker class is an abstract class because it includes both a concrete function (placeOrder) and an abstract function (buildObject).

abstract class Maker
{
  //This abstract function is used to 
  protected abstract function buildObject();
  
  public function placeOrder()
  {
    $manufacturedObject = $this->buildObject();
    return $manufacturedObject;
  }
}
?>
