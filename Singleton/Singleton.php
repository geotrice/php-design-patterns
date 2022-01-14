<?php
//Singleton.php
//This class is part of the Singleton Design Pattern.

class Singlton
{
  private static $instance = null;
  
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
