<?php 
//  create a copy of an object
class MyClass {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Create an instance of MyClass
$originalObject = new MyClass('Original');

// Clone the object
$clonedObject = clone $originalObject;

// Modify the name property of the cloned object
$clonedObject->name = 'Cloned';

// Output the names of both objects
echo 'Original object name: ' . $originalObject->name . "\n"; // Output: Original
echo 'Cloned object name: ' . $clonedObject->name . "\n";     // Output: Cloned


//  object’s  __clone() behavior ??? has to clear 
