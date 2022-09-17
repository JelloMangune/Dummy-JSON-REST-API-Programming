<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$product_id = $_GET['product_id'] ?? null;

$data = array(
    'title'    => 'updated product',
    'description' => 'sample description'
  );

$options = [
      'method'  => 'PUT',
      'headers'=>  ['Content-Type' => 'application/json'],
      'body' => json_encode($data)]
;

$response = $client->put('products/' . $product_id, $options);
$code = $response->getStatusCode();
$body = $response->getBody();
$decoded_response = json_decode($body);
echo "<pre>";
var_dump($decoded_response);

?>
