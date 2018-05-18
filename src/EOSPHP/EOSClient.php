<?php

namespace EOSPHP;

use EOSPHP\Plugins\Chain;
use EOSPHP\Plugins\History;
use EOSPHP\Plugins\Wallet;
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

    public function history(): History
    {
        return new History($this->client);
    }

    public function wallet(): Wallet
    {
        return new Wallet($this->client);
    }
}
