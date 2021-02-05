<!--class ke bahar ek bar declare krna h and usko phr koi bhi classess me use kar sakte hai -->

<?php

trait base{

    public function demo(){
        echo "hello world";
    }
}
trait hello{

    public function hi(){
        echo "hi";
    }
}

class A{
    use base,hello;
}

class B{
    use base;
}
class C{
    use base;
}

$test = new A();
$test->demo();
$test->hi();


?>