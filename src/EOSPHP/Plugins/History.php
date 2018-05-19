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

    public function getActions(string $accountName, int $pos = 0, int $offset = 0)
    {
        $body = '{"account_name":"'.$accountName.'", "pos":'.$pos.', "offset": '.$offset.'}';
        $res = $this->client->post('history/get_actions', ['body' => $body]);

        return json_decode($res->getBody());
    }

    public function getTransaction(string $transactionId)
    {
        $body = '{"id":"'.$transactionId.'"}';
        $res = $this->client->post('history/get_transaction', ['body' => $body]);

        return json_decode($res->getBody());
    }
}
