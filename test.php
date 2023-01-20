<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.dataforseo.com/v3/keywords_data/google_trends/explore/live',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'[
        {"type":"web", "keywords":["weather forecast"], "language_code":"en"}
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