<?php

namespace EOSPHP\Types;

class Info
{
    private $serverVersion;
    private $headBlockNum;
    private $lastIrreversibleBlockNum;
    private $headBlockId;
    private $headBlockTime;
    private $headBlockProducer;

    public function __construct($response)
    {
        $responseObj = json_decode($response);
        $this->serverVersion = $responseObj->server_version;
        $this->headBlockNum = $responseObj->head_block_num;
        $this->lastIrreversibleBlockNum = $responseObj->last_irreversible_block_num;
        $this->headBlockId = $responseObj->head_block_id;
        $this->headBlockTime = new \DateTime($responseObj->head_block_time);
        $this->headBlockProducer = $responseObj->head_block_producer;
    }

    public function serverVersion(): string
    {
        return $this->serverVersion;
    }

    public function lastIrreversibleBlockNum(): int
    {
        return $this->lastIrreversibleBlockNum;
    }

    public function headBlockNum(): int
    {
        return $this->headBlockNum;
    }

    public function headBlockId(): string
    {
        return $this->headBlockId;
    }

    public function headBlockTime(): \DateTime
    {
        return $this->headBlockTime;
    }

    public function headBlockProducer(): string
    {
        return $this->headBlockProducer;
    }
}