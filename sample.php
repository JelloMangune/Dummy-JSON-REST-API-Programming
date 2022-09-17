<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('https://dummyjson.com/products');
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
$products = $decoded_response->products;

echo "<pre>";
foreach($products as $product){
    var_dump($product->id);
}