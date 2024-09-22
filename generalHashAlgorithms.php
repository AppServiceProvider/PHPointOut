<?php 
// These are cryptographic hash algorithms. They are fast and not recommended for password 

$data = "my data";

// MD5 hash
$md5_hash = hash('md5', $data);
echo "MD5: $md5_hash\n";

// SHA-1 hash
$sha1_hash = hash('sha1', $data);
echo "SHA1: $sha1_hash\n";

// SHA-256 hash
$sha256_hash = hash('sha256', $data);
echo "SHA256: $sha256_hash\n";

// SHA-512 hash
$sha512_hash = hash('sha512', $data);
echo "SHA512: $sha512_hash\n";

// RIPEMD-160 hash
$ripemd160_hash = hash('ripemd160', $data);
echo "RIPEMD160: $ripemd160_hash\n";

// TIGER hash (less commonly used)
$tiger_hash = hash('tiger192,3', $data);
echo "TIGER: $tiger_hash\n";
