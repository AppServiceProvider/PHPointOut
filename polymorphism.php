<?php 
/*
Compile-Time Polymorphism (Static Polymorphism):
Method Overloading */
class MathOperations {
    public function add($a, $b) {
        return $a + $b;
    }
    public function addThreeNumbers($a, $b, $c) {
        return $a + $b + $c;
    }
}



/*
Runtime Polymorphism (Dynamic Polymorphism):
Method Overriding
*/

class Shape {
    public function calculateArea() {
        return 0; // Default implementation
    }
}
class Circle extends Shape {
    private $radius; // Add property for radius
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}
class Square extends Shape {
    private $side; // Add property for side
    public function __construct($side) {
        $this->side = $side;
    }
    public function calculateArea() {
        return $this->side * $this->side;
    }
}
// Demonstration of runtime polymorphism:
$shapes = [
    new Circle(5),
    new Square(4)
];
foreach ($shapes as $shape) {
    echo "Area of shape: " . $shape->calculateArea() . "\n";
}


/*
Interfaces and Abstract Classes
*/
interface Shpe {
    public function calculateArea();
}

class Cirle implements Shpe {
    public function calculateArea() {
        // implementation
    }
}

class Squre implements Shpe {
    public function calculateArea() {
        // implementation
    }
}
