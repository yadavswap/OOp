<!-- Inheritance in OOP = When a class derives from another class. -->
<!-- eg . if i have two class like class A,class B , so these two classes use both class properties and method -->
<!-- first class k/as base class-->
<!-- second class k/as derived class -->
<!-- special keyword use "extends" -->
<?php
class base{

    public $a,$b,$c;

    function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;


    }

    function sum(){

      echo "value A:" .$this->a;
      echo "value B:" . $this->b;
      echo "value C:". $this->c;
      $this->c= $this->a+$this->b;
    echo "Add Of A +B =". $this->c;

    }
}

class derived extends base{
    public $ta=10;
    public $total;

    function total(){

        $this->total = $this->ta + $this->c; 
        echo "total:" .$this->total;
    }
}

$c1 = new derived(10,20,50);
$c1->sum();
$c1->total();
?>