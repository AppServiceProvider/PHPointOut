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
