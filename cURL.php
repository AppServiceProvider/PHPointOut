<?php
// resource curl_init([string $url = null])  // optional $url  A string that represents the URL to be fetched. return success or false on failure.


// Initialize cURL session
$curl = curl_init('https://example.com');

// Set options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

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
