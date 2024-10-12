<?php 

interface Coff{
    function coffeeCost();
}
class SimpleCoffee implements Coff{
    function coffeeCost(){
        echo 5;
        return;
    }
}
abstract class CoffDecorator implements Coff{
    protected $property;
    function __construct(Coff $property){
        $this->property= $property;
    }
    abstract function coffeeCost();

}

class MilkDocorator extends CoffDecorator{
    function coffeeCost(){
       echo $this->property->coffeeCost() + 1.5;
    }
}

class SugarDecorator extends CoffDecorator{
    function coffeeCost(){
        $this->property->coffeeCost() + 0.5;
    }
}
$objj= new SimpleCoffee();
$objj->coffeeCost();

echo PHP_EOL;
$bojj2= new MilkDocorator($objj);
$bojj2->coffeeCost();

echo PHP_EOL;
$bojj3= new SugarDecorator($objj);
$bojj3->coffeeCost();