<?php 
namespace Animals;

include_once "vendor/autoload.php"; // autoload doesnt works
include_once "Animals/Dog.php";

// use Animals\Dog;
// use Animals\Cat;
// use Animals\Sounds\Cat as CatSound;
// use Animals\Sounds\Dog as SoundDog;

$dog= new Dog();
$dog->getName();

$cat= new Cat();
$cat->getName();

// $obj1= new CatSound();
// $obj1->catSound();


// $obj2= new SoundDog();
// $obj2->dogSound();
