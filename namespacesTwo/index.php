<?php
// Include the autoloader
require 'autoload.php';

// Use the namespace for classes
use Animals\Dog;
use Animals\Cat;
use Vehicles\Car;


$dog = new Dog();
$dog->bark();  // Outputs: Woof!

$Cat = new Cat();
$Cat->honk();

$car = new Car();
$car->honk();  // Outputs: Honk!
