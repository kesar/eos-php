<?php

namespace EOSPHP\Types;

class Info
{
    private $serverVersion;
    private $headBlockNum;
    private $lastIrreversibleBlockNum;
    private $lastIrreversibleBlockId;
    private $headBlockId;
    private $headBlockTime;
    private $headBlockProducer;
    private $virtualBlockCpuLimit;
    private $virtualBlockNetLimit;
    private $blockCpuLimit;
    private $blockNetLimit;
    private $chainId;

    public function __construct($response)
    {
        $responseObj = json_decode($response);
        $this->serverVersion = $responseObj->server_version;
        $this->headBlockNum = $responseObj->head_block_num;
        $this->lastIrreversibleBlockNum = $responseObj->last_irreversible_block_num;
        $this->lastIrreversibleBlockId = $responseObj->last_irreversible_block_id;
        $this->headBlockId = $responseObj->head_block_id;
        $this->headBlockTime = new \DateTime($responseObj->head_block_time);
        $this->headBlockProducer = $responseObj->head_block_producer;
        $this->virtualBlockCpuLimit = $responseObj->virtual_block_cpu_limit;
        $this->virtualBlockNetLimit = $responseObj->virtual_block_net_limit;
        $this->blockCpuLimit = $responseObj->block_cpu_limit;
        $this->blockNetLimit = $responseObj->block_net_limit;
        $this->chainId = $responseObj->chain_id;
    }

    public function chainId(): string
    {
        return $this->chainId;
    }

    public function serverVersion(): string
    {
        return $this->serverVersion;
    }

    public function lastIrreversibleBlockNum(): int
    {
        return $this->lastIrreversibleBlockNum;
    }

    public function lastIrreversibleBlockId(): string
    {
        return $this->lastIrreversibleBlockId;
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

    public function virtualBlockCpuLimit(): int
    {
        return $this->virtualBlockCpuLimit;
    }

    public function virtualBlockNetLimit(): int
    {
        return $this->virtualBlockNetLimit;
    }

    public function blockCpuLimit(): int
    {
        return $this->blockCpuLimit;
    }

    public function blockNetLimit(): int
    {
        return $this->blockNetLimit;
    }
}
