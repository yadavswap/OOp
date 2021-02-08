<!-- inverse h __sleep ka -->
<!-- serilse ke liye __sleep function h and unserilse ke liye __wakeup function hai -->
<!-- unserilse krne par automatically wakeup function call ho jata hai -->
<?php

class base{

    public $name = "swapnil";
    private $course ;

    public function setName($course){
        $this->course = $course;

    }

    public function __sleep(){
        return array('name');
    }

    public function __wakeup(){
        echo "This is wake up\n";
    }

    
}

$test  = new base();
$test->setName("swapnil");
$test2 = serialize($test);
$test1 = unserialize($test2);
print_r ($test1);
?>