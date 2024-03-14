<?php

// Providing the api for hitting.
$url = 'https://chimpu.xyz/api/post.php';

// Payload as phone number.
$data = array(
    'phonenumber' => '9717131037'
);

// Initializing the cURL session
$curl = curl_init();

// Setting the  cURL options
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  //curl_setopt() is used to prepare the curl objects and the HTTP Request.

// Execute cURL session
$response = curl_exec($curl); //curl_exec() is a function that sends the request and returns (or displays) the content it receives.

// Check for errors
if($response === false) {
    echo 'cURL Error: ' . curl_error($curl);
} else {
    // Get the response headers
    $response_headers = curl_getinfo($curl);

    // Close cURL session
    curl_close($curl);

    // Print the received headers
    echo '<h2>Headers received:</h2>';
    foreach ($response_headers as $header => $value) {
        echo "<strong>$header:</strong> $value<br>";
    }
}
?>
