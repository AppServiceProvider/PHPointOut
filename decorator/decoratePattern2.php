<?php
// Component interface
interface Coffee11 {
    public function cost();
}
// Concrete Component
class SimpleCoffee implements Coffee11 {
    public function cost() {
        return 5;
    }
}
// Decorator
abstract class CoffeeDecorator implements Coffee11 {
    protected $coffee;
    public function __construct(Coffee11 $coffee) {
        $this->coffee = $coffee;
    }
    abstract public function cost();
}
// Concrete Decorator 
class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 1.5; // Adding cost of milk
    }
}
// Concrete Decorator B
class SugarDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 0.5; // Adding cost of sugar
    }
}

$coffee11 = new SimpleCoffee();
$coffee11->cost() . "\n";

$milkCoffee = new MilkDecorator($coffee11);
echo $milkCoffee->cost() . "\n";

$sugarMilkCoffee = new SugarDecorator($coffee11);
echo $sugarMilkCoffee->cost() . "\n";
