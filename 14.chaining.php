<!-- method chaining - jo aapn object ke baad function declare krte h usko chain me declare krke number lines minimize kr sakte h -->
<!--  we have to write return $this;. -->
<?php

class base {

    public function first(){
        echo "this is first function"."<br>";
        return $this;
    }
    public function second(){
        echo "this is second function"."<br>";
        return $this;

    }

    public function third(){
        echo "this is third function";
    }

}

$test = new base();
$test ->first()->second()->third();


?>