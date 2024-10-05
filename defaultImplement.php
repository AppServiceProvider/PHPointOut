<?php 
interface CalculatorInterface {
    // Method signature: no default implementation
    public function add(int $a, int $b): int;

    // Method signature: with default implementation
    public function multiply(float $a, float $b): float {
        return $a * $b; // Default implementation
    }
}

// Implementing the interface and overriding default
class AdvancedCalculator implements CalculatorInterface {
    public function add(int $a, int $b): int {
        return $a + $b;
    }

    // Overriding the default implementation
    public function multiply(float $a, float $b): float {
        return $a * $b * 2; // Custom implementation
    }
}

// ==============================Default Implementation

abstract class Shape {
    abstract public function area(): float;

    // Concrete method with a default implementation
    public function display(){
    }
}

// Concrete class that extends the abstract class
class Rectangle extends Shape {
    public function area(): float {
    }
}
$rectangle = new Rectangle();
$rectangle->area(); 
$rectangle->display();