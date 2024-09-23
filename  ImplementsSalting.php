<?php 
/*
password_hash(): automatically generates a unique salt and incorporates it into the resulting hash.
You do not need to manually handle the salt
*/




$password = "securepassword";
// Hashing with password_hash (automatic salting)
$hashed_password = password_hash($password, PASSWORD_BCRYPT);
echo $hashed_password . "<br>";

$info = password_get_info($hashed_password);
print_r($info);






// =======================================Password Hashing Algorithms
//  password_hash() function supports various algorithms:

$password1 = "securepassword";
// Hash the password using Argon2
$hashed_password1 = password_hash($password1, PASSWORD_ARGON2ID);

echo $hashed_password1;








// =====================================Rehashing Passwords

$hashed_password = '$2y$10$k9b7Zz/aKQzO/k7jV0duQ.IJZ9cGxgT/KITv3u7UOHqg63cQ1bN2K'; // example

// Check if the password needs rehashing (e.g., because of a new algorithm)
if (password_needs_rehash($hashed_password, PASSWORD_ARGON2ID)) {
    $new_hashed_password = password_hash("securepassword", PASSWORD_ARGON2ID);
    echo "Password has been rehashed: " . $new_hashed_password;
} else {
    echo "No rehashing needed.";
}