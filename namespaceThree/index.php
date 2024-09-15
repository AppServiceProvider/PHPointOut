<?php

require 'autoload.php'; // Assuming autoloading is handled here

use AnimalsOne\Dog as DogOne;
use AnimalsTwo\Dog as DogTwo;

$dogOne = new DogOne();
$dogTwo = new DogTwo();

echo $dogOne->speak(); // Output: Woof from AnimalsOne!
echo $dogTwo->speak(); // Output: Woof from AnimalsTwo!
