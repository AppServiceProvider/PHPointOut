<?php 
// Base class
class Shape {
    // Virtual function
    public function calculateArea(): float {
        return 0; // Default implementation for the base class
    }
}
// Derived class 1
class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    // Override the virtual function
    public function calculateArea(): float {
        return 3.14 * $this->radius * $this->radius;
    }
}
// Function using polymorphism
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "\n";
}
$circle = new Circle(5);
// Call the function with different types of objects
printArea($circle); // Calls the calculateArea method of the Circle class