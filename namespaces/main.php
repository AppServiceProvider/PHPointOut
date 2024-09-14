<?php
namespace Xyz\Animals;
include "cat.php";
include "dog.php";


$obj= new Cat(); //    \Xyz\Animals\Cat
$obj->getName(); // Cat


$obj1= new Dog();
$obj1->getSound(); // Dox extend Cat -> Meo




