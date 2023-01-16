<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.dataforseo.com/v3/serp/google/organic/live/advanced',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'[
        {"keyword":"weather forecast", "location_code":2826, "language_code":"en", "device":"desktop", "os":"windows", "depth":100}
    ]',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Basic ZGFuLmJyaW5jYXQwN0BnbWFpbC5jb206YTY5MzI2YzNmODRjNjEzZA==',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);
curl_close($curl);
echo $response;
?>