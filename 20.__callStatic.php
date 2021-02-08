<!-- Like the __call() the __callStatic() magic method used when you attempt to access a non public method, but the difference between them is that when you call the method in static scope for example Class::method(). -->
<!-- koi user private static method ko call krenga tb ye method  run hongi -->
<?php
class base {
    private static function demo(){
        echo "This is demo function";
    }

    public static function __callStatic($method,$parameters){
        echo "This is non existing or private method";
    }

}
base::demo();
?>