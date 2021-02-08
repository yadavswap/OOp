<!-- A destructor is called when the object is destructed or the script is stopped or exited. -->
<!-- If you create a __destruct() function, PHP will automatically call this function at the end of the script. -->

<?php
class abc{
    function __construct(){
        echo "This is construct\n"."<br>";
    }
     function hello(){
        echo "This is hello\n "."<br>";
    }
    function __destruct(){
        echo "This is destruct";
    }
    
}

$test = new abc();
$test->hello();
?>


