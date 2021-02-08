<!-- Usually in php there are certain circumstances when you need to access a property directly by its name but because the property you want to access declared as protected or private it will cause error so to access it you have to implement  __get() and __set(). -->

<!-- __set method contain two parameters $property and $value -->
<?php

class base{
    private $name;

    function __get($property){
        echo "Your are trying to access non existing or private property($property)\n";
    }

    function __set($property,$value){
        echo " This is a non existing or private property : $property";
    }

}

$test = new base();
$test->name = "swapnil yadav";

?>