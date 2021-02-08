<!-- agar muze object ka data agar file,session,and database me storre krna h so me with the help of array se kr skata hu  Array(),serialize se bhi -->
<!-- but muze isme bhi error ati hai -->
<!-- serialize function kam hoata h object ko array me convert krna -->
<!-- sleep method only kch property ko store krna h so use me ati h -->
<!-- and serilize krne ke pahile hi sleep method call ho kar only jo data store krna h wo show krta -->
<!-- serilize object ko clean krne ka kam krta -->
<?php

 class base{
     public $name = "swapnil ";
     public $course = "B.E";

     public function __sleep(){
         return array("name");
     }

 }
 $test = new base;
 $test1 = serialize($test);
echo $test1;
?>
