<?php
$password = "securepassword";

// Hash the password using a strong algorithm (BCRYPT is default)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo "Original Password: " . $password . "<br>";
echo "Hashed Password: " . $hashed_password . "<br>";
