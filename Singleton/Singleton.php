<?php
//Singleton.php
//This class is part of the Singleton Design Pattern.

class Singlton
{
  private static $instance = null;
  
  //Note that the contructor is private which means
  //instantiation can only happen from within the class.
  //in this case from by calling getInstance()
  private function __contruct()
  {
  
  }
  public static function getInstance()
  {
    if(self::$instance == null)
    {
      self::$instance = new Singlton();
    }
    
    return self::$instance;
  }
}
?>
