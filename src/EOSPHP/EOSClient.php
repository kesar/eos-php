<?php

namespace EOSPHP;

use EOSPHP\Plugins\Chain;
use GuzzleHttp\Client;

class EOSClient
{
    private $client;

    public function __construct(string $baseUrl, int $version = 1)
    {
        $this->client = new Client(['base_uri' => $baseUrl.'/v'.$version.'/']);

    }

    public function chain(): Chain
    {
        return new Chain($this->client);
    }
}
