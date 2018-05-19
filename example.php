<?php

use EOSPHP\EOSClient;

include 'vendor/autoload.php';

$client = new EOSClient('http://127.0.0.1:8888');

$info = $client->chain()->getInfo();
$block = $client->chain()->getBlock(2);
$account = $client->chain()->getAccount('eosio');
$code = $client->chain()->getCode('eosio');
$stats = $client->chain()->getCurrencyStats('eosio.token', 'EOS');
$balance = $client->chain()->getCurrencyBalance('eosio.token', 'eosio.token', 'EOS');
$transaction = $client->history()->getTransaction('29716ecdd6a8555fab509321faabfb5d06e0bf25db678347c360e7f85159ca38');
$actions = $client->history()->getActions('eosio.token');
print_r($actions);
