<?php

namespace EOSPHP\Plugins;

use EOSPHP\Types\Block;
use EOSPHP\Types\Info;
use GuzzleHttp\Client;

class Chain implements Plugin
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /* TODO:
    3569548ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/chain/get_currency_balance
    3569548ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/chain/get_currency_stats
    3569548ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/chain/get_producers
    3569548ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/chain/push_block
    3569548ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/chain/push_transaction
    3569548ms thread-1   http_plugin.cpp:325           add_handler          ] add api url: /v1/chain/push_transactions
    */

    public function getInfo()
    {
        return new Info($this->client->get('chain/get_info')->getBody());
    }

    public function getBlock($blockOrNumber = 1)
    {
        return new Block($this->client->post('chain/get_block',
            ['body' => '{"block_num_or_id": "'.$blockOrNumber.'"}'])->getBody()
        );
    }

    public function getAccount(string $accountName)
    {

        $res = $this->client->post('chain/get_account', ['body' => '{"account_name": "'.$accountName.'"}']);

        return json_decode($res->getBody());
    }

    public function getCode(string $accountName)
    {

        $res = $this->client->post('chain/get_code', ['body' => '{"account_name": "'.$accountName.'"}']);

        return json_decode($res->getBody());
    }

    public function getTableRows(
        string $scope,
        string $code,
        string $table,
        bool $json = true,
        int $lowerBound = 0,
        int $upperBound = -1,
        int $limit = 10
    ) {
        $body = '{"scope":"'.$scope.'", "code":"'.$code.'", "table":"'.$table.'", "json": '.$json.', "lower_bound":'.$lowerBound.', "upper_bound":'.$upperBound.', "limit":'.$limit.'}';
        $res = $this->client->post('chain/get_code', ['body' => $body]);

        return json_decode($res->getBody());
    }

    public function abiJsonToBin(string $code, string $action, string $args)
    {
        $body = '{"code":"'.$code.'", "action":"'.$action.'", "args":'.$args.'}';
        $res = $this->client->post('chain/abi_json_to_bin', ['body' => $body]);

        return json_decode($res->getBody());
    }

    public function abiBinToJson(string $code, string $action, string $binArgs)
    {
        $body = '{"code":"'.$code.'", "action":"'.$action.'", "binargs":'.$binArgs.'}';
        $res = $this->client->post('chain/abi_json_to_bin', ['body' => $body]);

        return json_decode($res->getBody());
    }

    public function pushTransaction()
    {
        // TODO
    }

    public function pushTransactions()
    {
        // TODO
    }

    public function getRequiredKeys()
    {
        // TODO
    }
}