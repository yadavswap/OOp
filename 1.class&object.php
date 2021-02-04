<!-- A class is a template for objects, and an object is an instance of class. -->

<!-- builder ek  sketch banana tha h nd  usi ke same 10 flat banate h (rowhouse)-->
<!-- eg. class - Laptop
properties - price,color,ram ,etc
method(function) - rs.1000,black,500GB -->
<!-- object make outside the class -->

<?php
class cal {
  // Properties
  public $a,$b,$c;

  // Methods
  function sum() {
    // $this keyword refers to the current object
    $this->c = $this->a + $this->b;
    return $this->c;
  }
 
}
$n= new cal();
$n->a=10;
$n->b=20;



echo $n->sum();


?>