<!-- aapn direct class ko call  nhi kr sakte uska object bana kar   -->
<!-- use koi bhi string ko print kr skata h is method se -->


<?php
 class base{

    public function __toString(){
        return "this is tostring";
    }

 }

 $test = new base;
echo  $test;
?>