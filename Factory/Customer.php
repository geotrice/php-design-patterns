<?php
//Customer.php
//The Customer is part of the Factory pattern.
//This is the MAIN part of the pattern.

include_once('CookieFactory.php');
include_once('MuffinFactory.php');

class Customer
{
  private $oneCookie;
  private $oneMuffin;
  
  public function __construc()
  {
    $this->oneCookie = new CookieFactory();
    echo $this->oneCookie->placeOrder() . "<br />";
    
    $this->oneMuffin = new MuffinFactory();
    echo $this->oneMuffin->placeOrder() . "<br />";
  }
}

$bob = new Customer();
?>
