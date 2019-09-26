<?php
require 'vendor/autoload.php';
$single_server = array(
    'host' => '127.0.0.1',
    'port' => 6379,
    'database' => 15,
);
$client = new Predis\Client($single_server);
$client->set("k","v");
var_dump($client->get("k"));
var_dump(test("abc"));







