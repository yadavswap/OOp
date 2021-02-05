<!-- Abstract class - secure / protected-->
<!-- No make any object of abstarct class -->
<!-- before class use "abstract" keyword -->
<!-- Min one function/method required-->
<!--  method ko declare krenge but implement nahi krenege-->
<!-- require ki uske derived class me implement kare -->

<?php

abstract class A {

    public $name;
    abstract protected function add($a,$b);
}

class  B extends A{
    public function add ($a,$b){
        echo $a + $b;
    }
}

$c1 = new B();
$c1->add(10,20);


?>