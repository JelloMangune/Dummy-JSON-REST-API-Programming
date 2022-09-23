<?php
require "../vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$data = array(
    'firstName' => 'Jello',
    'maidenName' => 'N/A',
    'lastName' => 'Mangune',
    'age' => '20',
    'gender' => 'male',
    'email' => 'mangune.jello@auf.edu.ph',
    'phone' => '01234567890',
    'bloodGroup' => 'O',
    'image' => 'image.png'
);

$options = [
      'method'  => 'POST',
      'headers'=>  ['Content-Type' => 'application/json'],
      'body' => json_encode($data)]
;
$response = $client->post('users/add', $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
echo "<pre>";
var_dump($decoded_response);

?>