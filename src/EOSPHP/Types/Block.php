<?php

namespace EOSPHP\Types;

class Block
{
    private $previous;
    private $timestamp;
    private $transactionMroot;
    private $actionMroot;
    private $blockMroot;
    private $producer;
    private $scheduleVersion;
    private $newProducers;
    private $producerSignature;

    public function __construct($response)
    {
        $responseObj = json_decode($response);

        $this->previous = $responseObj->previous;
        $this->timestamp = new \DateTime($responseObj->timestamp);
        $this->transactionMroot = $responseObj->transaction_mroot;
        $this->actionMroot = $responseObj->action_mroot;
        $this->blockMroot = $responseObj->block_mroot;
        $this->producer = $responseObj->producer;
        $this->scheduleVersion = $responseObj->schedule_version;
        $this->newProducers = $responseObj->new_producers;
        $this->producerSignature = $responseObj->producer_signature;
    }

    public function previous(): string
    {
        return $this->previous;
    }

    public function timestamp(): \DateTime
    {
        return $this->timestamp;
    }

    public function transactionMroot(): string
    {
        return $this->transactionMroot;
    }

    public function actionMroot(): string
    {
        return $this->actionMroot;
    }

    public function blockMroot(): string
    {
        return $this->blockMroot;
    }

    public function producer(): string
    {
        return $this->producer;
    }

    public function scheduleVersion(): string
    {
        return $this->scheduleVersion;
    }

    public function newProducers(): ?string
    {
        return $this->newProducers;
    }

    public function producerSignature(): string
    {
        return $this->producerSignature;
    }
}
