<?php
//Prototype.php
//Prototype is a part of the Prototype Design Pattern

class Prototype
{
  public $primative;
  public $component;
  public $circularReference;
  
  public function __clone()
  {
    //$primatives are automatically cloned
    $this->component = clone $this->component;
    
    $this->circularReference = clone $this->circularReference;
    $this->circularReference->prototype = $this;
  }
}

?>
