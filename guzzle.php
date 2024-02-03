<?php

require __DIR__ . "/vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client;

$response = $client->get("https://en.wikipedia.org/wiki/Dissolution_of_the_Soviet_Union");

echo $response->getBody()->getContents();