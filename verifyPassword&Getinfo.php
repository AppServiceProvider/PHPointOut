<?php 
// Set the desired hash algorithm (e.g., bcrypt)
$algorithm = PASSWORD_DEFAULT;
$password = "my_strong_password";
$hashedPassword = password_hash($password, $algorithm);

// Store the hashed password in a database or other secure storage

// Retrieve the stored hashed password from the database
$storedHashedPassword = "my_strong_password";

// Verify a password against the hashed password
if (password_verify("my_strong_password", $hashedPassword)) {
    echo "Password verification successful!";
} else {
    echo "Password verification failed!";
}

// Get information about the hashed password
$info = password_get_info($storedHashedPassword);
print_r($info);