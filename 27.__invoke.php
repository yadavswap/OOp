<!-- object ko function bana kar call krunga to error ayenga -->
<!-- error nhi ane hona isliye invoke method -->

<?php

class base{
    public $name = "swapnil";
    public function hello(){
        echo "This is hello function \n";

    }
    public function __invoke(){
        echo "This is invoke function";

    }

    
}
$test = new base;
$test->hello();
$test();

?>