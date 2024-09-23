<?php 
// Salting involves adding a random value (called a salt) to the password before hashing it




$password = "securepassword";

// Generate a random salt
$salt = bin2hex(random_bytes(16)); // Generate a 16-byte salt and convert it to a hexadecimal string

// Append the salt to the password
$salted_password = $password . $salt;

// Hash the salted password
$hashed_password = hash('sha256', $salted_password); // Using SHA-256 for demonstration

echo "Salt: " . $salt . "<br>";
echo "Salted and Hashed Password: " . $hashed_password;
