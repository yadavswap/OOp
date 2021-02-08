<!-- Agar property set hai ya nahi ye check krne ke liye isset use hota h -->
<!-- agar proprty set h  to ans 1 and nhi to 0 -->
<?php
class base{

    public $name ;
    private $course;
    public function SetCourse($course){
        $this->course = $course;
    }


    public function __isset($property){
        echo isset($this->$property);
    }

}
$test = new base();

// public  ke liye
// $test->name = "Swapnil";
// echo isset($test->name);
// private ke liye
$test->SetCourse("B.E");
echo isset($test->course);
// echo $test->isset($this->course);

?>