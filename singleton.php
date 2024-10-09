<?php 
/* ========================== Static Method Approach
A Singleton in PHP is a design pattern that restricts the instantiation of a class to one "single" instance. 
This is useful when exactly one object is needed to coordinate actions across the system.
*/
class MyClass2 {
    private static $instance = null;
    private function __construct() {
        echo "hellow".PHP_EOL;
    }
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new MyClass2();
        }
        return self::$instance;
    }
    public function someMethod() {
        echo "Executing some method." .PHP_EOL;
    }
}
$instance = MyClass2::getInstance();
$instance2 = MyClass2::getInstance();
$instance3 = MyClass2::getInstance();

$instance->someMethod(); // hellow Executing some method
$instance->someMethod(); // Executing some method
$instance->someMethod(); // Executing some method

$instance2->someMethod(); // Executing some method.
$instance3->someMethod(); // Executing some method
