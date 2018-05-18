<?php

namespace EOSPHP\Plugins;

use GuzzleHttp\Client;

class History implements Plugin
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    // TODO:  /v1/history/get_actions  /v1/history/get_transaction
}
