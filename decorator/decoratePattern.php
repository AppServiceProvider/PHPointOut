<?php 
interface Coff{
    function coffeeCost();
}
class SimpleCoffee implements Coff{
    function coffeeCost(){
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
$objj= new SimpleCoffee();
$objj->coffeeCost();

$bojj2= new MilkDocorator($objj);
$bojj2->coffeeCost();