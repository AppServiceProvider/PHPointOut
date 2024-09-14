<?php

// Manually include the class files
require 'Animals/Dog.php';
require 'Vehicles/Car.php';

// Fully Qualified Names (FQN)
$dog = new \Animals\Dog();
$dog->bark();  // Outputs: Woof!

$car = new \Vehicles\Car();
$car->honk();  // Outputs: Honk!
