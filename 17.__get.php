<!-- __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties. -->
<!-- agar koi properties and method available nahi h so wo automatically call ho kar message show krta hai -->
<?php

class base{

 private $name = ["Swapnil","yadav"];

 
 public function __get($property){
     echo "This is get($property) ";

 }    
}
$test = new base();
print_r($test->name)

?>