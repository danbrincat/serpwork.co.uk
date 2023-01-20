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
        {"date_from":"2022-09-01", "date_to":"2022-12-31", "search_partners":false, "keywords":["weather forecast"], "location_code":2826, "language_code":"en", "sort_by":"relevance", "type":"web"}
    ]',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Basic ZGFuLmJyaW5jYXQwN0BnbWFpbC5jb206YTY5MzI2YzNmODRjNjEzZA==',
        'Content-Type: application/json'
    ),
));

//$response = curl_exec($curl);

//curl_close($curl);
//echo $response;

$data = file_get_contents($curl);
$response = json_decode($data, true);

echo $response;

?>