<?php
// Beverage.php
interface Beverage {
    public function getDescription(): string;
    public function getCost(): float;
}


// Coffee.php
class Coffee implements Beverage {
    public function getDescription(): string {
        return "Coffee";
    }
    public function getCost(): float {
        return 5.00;
    }
}


// BeverageDecorator.php
abstract class BeverageDecorator implements Beverage {
    protected Beverage $beverage;
    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }
    public function getDescription(): string {
        return $this->beverage->getDescription();
    }
    public function getCost(): float {
        return $this->beverage->getCost();
    }
}


// MilkDecorator.php
class MilkDecorator extends BeverageDecorator {
    public function getDescription(): string {
        return $this->beverage->getDescription() . ", Milk";
    }

    public function getCost(): float {
        return $this->beverage->getCost() + 2;
    }
}

// SugarDecorator.php
class SugarDecorator extends BeverageDecorator {
    public function getDescription(): string {
        return $this->beverage->getDescription() . ", Sugar";
    }

    public function getCost(): float {
        return $this->beverage->getCost() + 1;
    }
}



$coffee = new Coffee();
echo $coffee->getDescription(); // Output: Coffee
echo $coffee->getCost();        // Output: 5.00
echo PHP_EOL;

$milkCoffee = new MilkDecorator($coffee);
echo $milkCoffee->getDescription(); 
echo $milkCoffee->getCost();        
echo PHP_EOL;

$sugarMilkCoffee = new SugarDecorator($coffee);
echo $sugarMilkCoffee->getDescription(); 
echo $sugarMilkCoffee->getCost();   
echo PHP_EOL;

$sugarMilkCoffee = new SugarDecorator($milkCoffee);
echo $sugarMilkCoffee->getDescription(); 
echo $sugarMilkCoffee->getCost();        
echo PHP_EOL;



