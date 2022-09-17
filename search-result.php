<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$searched_item = $_POST['searchInput'];
$response = $client->get('products/search?q=' . $searched_item );
$code = $response->getStatusCode();
$body = $response->getBody();
$products = json_decode($body);

echo "<pre>";
var_dump($products);
?>
