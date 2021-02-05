<!-- self - apne khud ke  member variable ko print krenga -->
<!-- static - apne derived class ke member variable ko show krenga -->
<?php
class base {

    protected static $name = "swap";
    public function show(){
        echo self::$name;
        echo static::$name;
    }
    
}

class derived extends base{

    protected static $name="yadav";
}


$test = new derived();
$test->show();

?>
