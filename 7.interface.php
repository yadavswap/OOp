<!-- multiple class ko ek hi class me inheritance karna  -->
<!-- class rename  as interface -->
<!-- interface me no declare properities -->
<!-- it work like abstract class -->
<!-- cannt make object of interface -->
<!-- multiple method declare but not implement -->
<!-- use keyword "implements" -->

<?php

interface A {
    function hello($n);

}
interface C {
    function hi($n);
    function bye();
}

class B implements A,C {
    public function hello($n){
        echo "Hello" .$n."<br>";
    }
    public function hi($n){
        echo "Hi" .$n."<br>";
    }
    public function bye(){
        echo "Bye"."<br>";
    }
}

$c1= new B();
$c1->hello("Good Morning");
$c1->hi(" Afternoon");
$c1->bye(" Night");

?>