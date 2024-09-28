<?php 
class MyClass {
    public function __construct() {
    }

    // Make the clone method private to disable cloning
    private function __clone() {
        // Optional: you can leave this empty or throw an exception
    }
}

$object = new MyClass();

// fatal error due to private __clone()
// $clone = clone $object;  // Fatal error: Call to private MyClass::__clone() from context






// ========================================

class MyClass1 {
    public $name = "hello";

    // Constructor - fix the missing parameter
        public function __construct($name = null) {
        if ($name !== null) { // !== Not identical $x !== $y Returns true if $x is not equal to $y, or they are not of the same type
            $this->name = $name;
        }
    }

    // Optional: Public clone method (you can leave it empty if cloning is allowed)
    public function __clone() {
    }
    public function get() {
        return $this->name;
    }
}

$object = new MyClass1(); 
$clone1 = clone $object; 
echo $clone1->get(); 


