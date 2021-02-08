<!-- agar muze priavte property ko unset krna h so muze __unset method use krna padenga -->
<!-- direct object bana kar call nahi kar sakte h agar krna h unset so __unsset method ka use krna padenga -->
<!-- unset krna matalb destroy krna -->
<?php

class base{
    public $name = "swapnil";
    private $course = "B.E";

    public function __unset($property){
        unset($this->$property);

    }
     
}

$test = new base();
    // echo $test->name;
unset($test->name);
// echo $test->name;

// unset($test->course);

?>