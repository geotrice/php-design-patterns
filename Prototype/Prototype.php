<?php
//Prototype.php
//Prototype is a part of the Prototype Design Pattern

class Prototype
{
  public $primative; //aka literal
  public $component; //aka object
  public $circularReference; //pointing back to "this" instance
  
  public function __clone()
  {
    //$primatives are automatically cloned
    $this->component = clone $this->component;
    
    $this->circularReference = clone $this->circularReference;
    $this->circularReference->prototype = $this;
  }
}

?>
