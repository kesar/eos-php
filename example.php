<?php

use EOSPHP\EOSClient;

include 'vendor/autoload.php';

// $client = new EOSClient('http://54.194.49.21:8888');
$client = new EOSClient('http://127.0.0.1:8888');

$info = $client->chain()->getInfo();
$info = $client->chain()->getBlock(5);
print_r($info);


$lastBlock = $info->lastIrreversibleBlockNum();

