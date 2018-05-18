<?php

namespace EOSPHP\Plugins;

use GuzzleHttp\Client;

class Wallet implements Plugin
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /* TODO:
     * 3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/create
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/create_key
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/get_public_keys
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/import_key
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/list_keys
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/list_wallets
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/lock
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/lock_all
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/open
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/set_timeout
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/sign_transaction
    3569549ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/wallet/unlock
     */
}
