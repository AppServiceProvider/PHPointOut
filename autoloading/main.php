<?php 

// include "bike.php";
// include "planet.php";
// include "spaceship.php";



function autoload($name) {
    include strtolower("{$name}.php");  // Convert class name to lowercase and include the file
}
// Register the autoload function
spl_autoload_register('autoload');

(new Spaceship)->lunch(); // Create a new object of class Spaceship (should trigger the autoload)