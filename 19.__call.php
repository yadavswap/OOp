<!-- The __call() method will be called when you try to access a method that is not publicly accessible on the object. -->
<?php
class base{
    private $name;
    private function hello($n){
        $this->name = $n;
    }

    public function __call($property,$value){
        echo "This is private or non existing method $property\n";
    }


} 
$test = new base();
echo $test->hello("swapnil");
// non existing
echo $test->demo("yadav");
?>