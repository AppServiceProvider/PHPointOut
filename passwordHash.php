<?php 
/*
Available algorythm Values
PASSWORD_DEFAULT: Uses the current recommended default algorithm (currently bcrypt).
PASSWORD_BCRYPT: Uses the bcrypt algorithm.
PASSWORD_ARGON2I: Uses the Argon2i algorithm.
PASSWORD_ARGON2ID: Uses the Argon2id algorithm.


password_hash(string $password, int $algo, array $options = []): string
$options = ['cost' => 12];  // Higher cost increases the computation time
$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
echo $hashedPassword;
*/



$pass= "secret pass";
$hash= password_hash($pass, PASSWORD_BCRYPT);
// echo $hash;
// ==========================password_verify

$userInput= "secret pas"; // secret pass
if(password_verify($userInput, $hash)){
    // echo "true";
}else{
    // echo "false";
}

// =============================password_verify


if (true == password_verify($userInput, $hash)){
    // echo "match";
}else{
    // echo "did not match";
}
// =============================Ternary Operator
// echo password_verify($userInput, $hash) ? "match" : "did not match";



// ==================Automatically Checking the Algorithm Using password_get_info()
$info = password_get_info($hash);
print_r($info);

// ========Square Bracket Notation: [] This is the modern array syntax in PHP
$array = [
    'algo' => '2y',
    'algoName' => 'bcrypt',
    'options' => [
        'cost' => 12
    ]
];
