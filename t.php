<?php

use Greeter\GreeterClient;
use Greeter\HelloRequest;
use Grpc\ChannelCredentials;

require 'vendor/autoload.php';

$client = new GreeterClient('xxx:8701', [
    'credentials' => ChannelCredentials::createInsecure(),
]);

var_dump($client);die;

$request = new HelloRequest();
$request->setName("");

$get = $client->SayHello($request)->wait();
