<?php
// Data to be hashed
$data = "Hello, World!";
// Secret key
$key = "supersecretkey";
// Generating the HMAC using SHA256
$hash = hash_hmac('sha256', $data, $key, false); //66b1fe51c54d313a85d84dd57685f2e88a1adaa85417c78c83f88cba9bd7fbeb

// echo $hash;


// =========================================

// Data to be hashed
$data = "Hello, World!";
// Secret key
$key = "mysecretkey";
// Generating HMAC using SHA512 with raw binary output
$hash1 = hash_hmac('sha512', $data, $key, true);
echo $hash1; //*k!��=�Wᡣo���/
// Convert to base64 for readability
echo  base64_encode($hash);


// =========================================

$filename = "test.txt";
$md5file = md5_file($filename);
echo $md5file;



