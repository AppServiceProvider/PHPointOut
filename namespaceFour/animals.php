<?php 
namespace Animals;

include_once "./Animals/Dog.php";
include_once "./Animals/Cat.php";
include_once "./Sound/Cat.php";
include_once "./Sound/Dog.php";

use Animals\Sounds\Cat;

use Animals\Sounds\Dog as SoundDog;

$obj= new Dog();
$obj->getName();

$obj1= new Cat();
$obj1->CatSound();


$obj2= new SoundDog();
$obj2->DogSound();
