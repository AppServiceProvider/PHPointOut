<?php
// Include the autoloader
require 'autoload.php';

// Fully Qualified Names (FQN)
$dog = new \Animals\Dog();
$dog->bark();  // Outputs: Woof!

$Cat = new \Animals\Cat();
$Cat->honk();

$car = new \Vehicles\Car();
$car->honk();  // Outputs: Honk!
