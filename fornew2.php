<?php

$send = sendSMS('hello', 'sendername', '8109352516');

function sendSMS($message, $sendername, $recipient_no){
    // Request parameters array
    $requestParams = array(
        'username' => 'shri108jsr@gmail.com',
        'message' => $message,
        'sendername' => $sendername,
        'smstype' => 'TRANS',
        'numbers' => $recipient_no,
        'apikey' => '9jjddd3232-f3j3-3jdj'
    );
    
    // Merge API url and parameters
    $apiUrl = "http://login.aquasms.com/sendSMS?";
    foreach($requestParams as $key => $val){
        $apiUrl .= $key.'='.urlencode($val).'&';
    }
    $apiUrl = rtrim($apiUrl, "&");
    
    // API call
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Return curl response
    return $response;
}