<?php 

// echo md5('hellow world');
// echo sha1('hellow world');

// print_r(hash_algos());

// echo hash("md5","hellow world");
// echo hash("sha1","hellow world");

// echo bin2hex(mhash(MHASH_MD5,"HELLOW WORLD")); 

// echo bin2hex(mhash(MHASH_SHA512,"HELLOW WORLD")); 




$data = "Hello, World!";
// Using the MD5 algorithm to hash the data
$hash = mhash(MHASH_MD5, $data);
// Convert binary hash to hexadecimal
$hexHash = bin2hex($hash);
echo "Hashed Value: " . $hexHash;




// ------------------Keyed Hash Example (HMAC):

$data = "Secret Message";
$key = "my_secret_key";
// Using the SHA256 algorithm with a key (HMAC)
$hash = mhash(MHASH_SHA256, $data, $key);

// Convert binary hash to hexadecimal
$hexHash = bin2hex($hash);
echo $hexHash;




// -------------------------Modern Equivalent (hash()):
// hash(string $algorithms, string $data,option bool $raw_output = false): string

//Available Algorithms:
$algorithms = hash_algos();
print_r($algorithms); //59 algo



// Hashing using the hash() function (MD5)
$hash = hash('md5', 'Hello, World!');
echo $hash;


// HMAC-based hashing 
// hash_hmac(string $algo, string $data, string $key,option bool $raw_output = false): string

$hmacHash = hash_hmac('sha256', 'Secret Message', 'my_secret_key');
echo $hmacHash;