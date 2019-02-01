<?php
/**
* 
*/
class Dragonball
{
  private $ballCount;
  function __construct()
  {
    $this->ballCount = 0;
  }
  public function iFoundaball()
  {
    $this->ballCount++;
    if($this->ballCount == 7){
      
      print 'As your Wish';
      $this->ballCount =0;
    }
  }
}
$obj= new Dragonball();
$obj->iFoundaball();
?>