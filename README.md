# PHP note: Asymmetric key Cryptography 


#### mhash(int $hash_algorithm, string $data, optional string $key = null): string





# Hash Algorithms
These algorithms take an input (or "message") and produce a fixed-size string of bytes.
general-purpose cryptographic hashing algorithms. 
They are used to hash data, but they do not incorporate important password security features 
like salting, stretching, or key derivation.

* hash_algorithm
- MHASH_MD5
- MHASH_SHA1
- MHASH_SHA256
- MHASH_SHA512
- MHASH_RIPEMD160
- MHASH_TIGER





# Password Hashing Algorithms
These are specifically designed to hash passwords securely. 
They incorporate techniques to slow down the hashing process, making it harder for attackers to use brute-force methods.
Are specifically designed for password hashing. 
These algorithms automatically handle salting and stretching, making them much more secure for password storage.
They include salting and iterative hashing to make brute-force and rainbow table attacks much harder.



* Available algorythm Values
- PASSWORD_DEFAULT: Uses the current recommended default algorithm (currently bcrypt).
- PASSWORD_BCRYPT: Uses the bcrypt algorithm.
- PASSWORD_ARGON2I: Uses the Argon2i algorithm.
- PASSWORD_ARGON2ID: Uses the Argon2id algorithm.