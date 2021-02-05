<!-- base class and derived class me same same function and properities rahti h  -->
<!-- method overridding = same method in both classes -->
<!-- properties overridding = same properties in both classes -->



<?php

 class  A{

    public $name ="parent class";
    public function sum($a,$b){
       return $a * $b;

    }

 }

 class B extends A{

    public $name="child class";
    public function add($a,$b){
        return $a + $b;
    }
 }
 $c1 = new A();
 echo $c1->sum(10,20);
 
 
?>