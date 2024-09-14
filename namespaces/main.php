<?php
namespace Xyz\Animals;
include "cat.php";
include "dog.php";


$obj= new Cat(); //    \Xyz\Animals\Cat
$obj->getName(); // Cat

(new \Xyz\Animals\Dog)->getName(); //   \Xyz\Animals\Dog





// php built-in class
$date = new \DateTime();
echo $date->format('Y-m-d H:i:s');  // Outputs: Current date and time in 'YYYY-MM-DD HH:MM:SS' format


