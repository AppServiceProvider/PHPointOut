<?php
// Example 1: Calculating a Ratio
$redBalls = 2;
$blueBalls = 3;

// Ratio of red to blue balls
$ratio = $redBalls . ':' . $blueBalls;

echo "Ratio of red to blue balls: $ratio\n"; //Ratio of red to blue balls: 2:3

// Example 2: Checking Proportion
$a = 2;
$b = 3;
$c = 4;
$d = 6;

// Checking if a:b::c:d forms a proportion
$proportionCheck = ($a / $b == $c / $d);

if ($proportionCheck) {
    echo "a:b::c:d forms a proportion.\n";
} else {
    echo "a:b::c:d does not form a proportion.\n";
}


