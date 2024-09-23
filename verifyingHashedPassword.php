<?php
// Password provided by the user (e.g., during login)
$entered_password = "securepassword";

// Hashed password stored in the database
$stored_hashed_password = '$2y$10$k9b7Zz/aKQzO/k7jV0duQ.IJZ9cGxgT/KITv3u7UOHqg63cQ1bN2K'; // example

// Verify the entered password against the stored hash
if (password_verify($entered_password, $stored_hashed_password)) {
    echo "Password is valid!";
} else {
    echo "Invalid password!";
}
