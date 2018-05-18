# EOS RPC Client in PHP

### Install:
```bash
 composer require kesar/eos-php
 ```

### Examples:

```php

use EOSPHP\EOSClient;

include 'vendor/autoload.php';

$client = new EOSClient('http://127.0.0.1:8888');

$info = $client->chain()->getInfo();
$block = $client->chain()->getBlock(2);
$account = $client->chain()->getAccount('eosio');
$code = $client->chain()->getCode('eosio');
print_r($account);

```