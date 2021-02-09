<!-- List of magic constants :- __line__,__file__,__dir__,__function__,__class__,__method__,__namespace__,__trait__ -->
<!-- __LINE__ -->
<?php
  echo " Line NUmber:" .__Line__."<br>";
?>
<!-- __FILE__ -->
<?php

echo "File Path :". __FILE__."<br>";
?>
<!-- __DIR__ -->
<?php

echo "Dir Path :". __DIR__."<br>";
?>
<!-- __FUNCTION__ -->
<?php
 
     function hello(){
         echo"The function ". __FUNCTION__;
     }

//  $test = new base;
//  $test->hello();
hello();
?>

<!-- __CLASS__ -->
<?php
 class base{
    function hello(){
        echo"The Class ". __CLASS__;
    }
 }
   

 $test = new base;
 $test->hello();
// hello();
?>
<!-- __METHOD__ -->
<?php
 class basename{
    function hello(){
        echo"The Method ". __METHOD__;
    }
 }
   

 $test = new base;
 $test->hello();
// hello();
?>

<!-- __NAMESPACE__ -->
<?php

// namespace pro;
// first line me namespace likho baki delete krke
 class basenamenew{
    function hello(){
        echo"The Method ". __NAMESPACE__."<br>";
    }
 }
   

 $test = new basenamenew;
 $test->hello();
// hello();
?>

<!-- __TRAIT__ -->
<?php
trait traitname{
    function getTrait(){
        return __TRAIT__;
    }
}
 class newbasename{
  use traitname;
 }
   

 $test = new newbasename;
 echo $test->getTrait();
// hello();
?>
