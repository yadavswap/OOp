<!-- If you create a __construct() function, PHP will automatically call this function when you create an object from a class. -->

<?php
class cal {
  // Properties
  public $a,$b,$c;

  // Methods
  function __construct($a,$b) {
      $this->a = $a;
      $this->b = $b;


    
  }
  function sum(){
    $this->c= $this->a+$this->b;
    return  $this->c;

  }
 
}
$n= new cal(10,20);


echo $n->sum();


?>