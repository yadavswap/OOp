<!-- Access modifierers are three type : public ,protected ,private -->
<!-- public :- use from anywherere  eg.outside class ,inside class ,derived class also -->
<!-- protected :- use in class iteself and derived class only -->
<!-- private :-  only class itself-->

<?php 
class cal{
    protected $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function sum(){
        echo $this->name . "<br>";
    }
    
}
class der extends cal{
    public function show(){
        echo "Name :". $this->name;

    }
}
$c1 = new cal('swapnil');
// $c1->name = "yadav";
$c1->sum();
$c2 = new der('swap');
$c2->show();



?>