<!-- type hiniting means if value integer declare h so pass bhi integer value hone hona nahi to error ayengi -->
<!-- o	In simple word, type hinting means providing hints to function to only accept the given data type. -->
<!-- o	In technical word we can say that Type Hinting is method by which we can force function to accept the desired data type. -->
<?php
class base {

    function sum(int $a){

        echo $a +10;
    }
}
$test = new base;
$test->sum(10);
// $test->sum("swp");

?>