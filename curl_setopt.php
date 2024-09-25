<?php 
/*
It allows you configure different aspects of the HTTP request, such as the URL, request method, headers, timeouts, and more.
curl_setopt(resource $ch, int $option, mixed $value): bool


$ch: A cURL handle returned by curl_init().
$option: A cURL option constant specifying the setting to modify. options are defined using predefined constants (e.g., CURLOPT_URL, CURLOPT_RETURNTRANSFER).
$value: The value to assign to the specified option.The type of this value depends on the option being set.



Common cURL Options: predefined constants

CURLOPT_URL: Sets the URL to fetch.
CURLOPT_RETURNTRANSFER: Returns the transfer as a string instead of outputting it directly.
CURLOPT_HEADER: Returns the HTTP headers along with the body.
CURLOPT_NOBODY: Skips the body and returns only the headers.
CURLOPT_POST: Enables POST data transfer.
CURLOPT_POSTFIELDS: Sets the POST fields to be sent.
CURLOPT_CUSTOMREQUEST: Sets a custom request method (e.g., "PUT", "DELETE").
CURLOPT_HTTPHEADER: Sets custom HTTP headers.
CURLOPT_TIMEOUT: Sets the maximum time in seconds for the transfer.
CURLOPT_CONNECTTIMEOUT: Sets the maximum time in seconds for connecting to the server.
CURLOPT_FOLLOWLOCATION: Follows redirects.
CURLOPT_SSL_VERIFYPEER: Verifies SSL certificates.
CURLOPT_SSL_VERIFYHOST: Verifies the hostname against the SSL certificate.

*/




// Initialize cURL session
$curl = curl_init();

// Set the URL to fetch
curl_setopt($curl, CURLOPT_URL, 'https://api.example.com/data');

// Set to return the transfer as a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Set the User-Agent
curl_setopt($curl, CURLOPT_USERAGENT, 'MyUserAgent/1.0');

// Execute cURL session
$response = curl_exec($curl);

// Check for errors
if ($response === false) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    echo 'Response: ' . $response;
}

// Close cURL session
curl_close($curl);





/* ================================================================
curl_setopt, the $value parameter can take different types of values depending on the specific option you are setting.

// String
curl_setopt($curl, CURLOPT_URL, 'https://api.example.com/data');
// Boolean
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return response as a string
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); // Follow redirects

// Integer
curl_setopt($curl, CURLOPT_TIMEOUT, 10); // Timeout in seconds

// Array
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer your_token',
]);

// CurlFile
curl_setopt($curl, CURLOPT_POSTFIELDS, [
    'file' => new CurlFile('/path/to/file.txt')
]);
*/


// $curl = curl_init();

// // Set URL and other options
// curl_setopt($curl, CURLOPT_URL, 'https://api.example.com/upload');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_TIMEOUT, 15);
// curl_setopt($curl, CURLOPT_HTTPHEADER, [
//     'Content-Type: multipart/form-data',
// ]);

// // Set POST fields
// curl_setopt($curl, CURLOPT_POSTFIELDS, [
//     'username' => 'example_user',
//     'file' => new CurlFile('/path/to/file.txt'),
// ]);

// // Execute and handle response
// $response = curl_exec($curl);
// if (curl_errno($curl)) {
//     echo 'Error:' . curl_error($curl);
// } else {
//     echo 'Response:' . $response;
// }

// // Close session
// curl_close($curl);






