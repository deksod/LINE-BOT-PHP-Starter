<?php
$access_token = 'gkxYC3fWA05IL+/tOaDA0ME2rRqnDfchz/2kn43f84xrGdq1iIoBnF7IuNer+dGF5kSoF9jkOa8lSRx3vlSWn4QFbYibfEL+GHnf7Ci7uCeGEbC+wJL/7HA/OAbZ1eaUcLni/x9RzCMVY3YeK8frOwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
