<!-- jaha par method / function same hote h usko trait overriding -->
<!-- property level 1. jo class declare kiya usko
2.trait class ko
3.last class ko -->

<?php

trait test{

    public function hello(){
        echo "hey hello from test class";
    }
}
class A {
    public function hello(){
        // 3rd
        echo "hey hello A";
    }
}

class B extends A{
    // 2nd
    use test;
    // 1st 
    public function hello(){
        echo " hey hello from B";
    }
}
$test = new B;
$test->hello();
?>