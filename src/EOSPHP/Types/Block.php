<?php

namespace EOSPHP\Types;

class Block
{
    private $timestamp;
    private $producer;
    private $confirmed;
    private $previous;
    private $transactionMroot;
    private $actionMroot;
    private $blockMroot;
    private $scheduleVersion;
    private $newProducers;
    private $producerSignature;
    private $id;
    private $blockNum;
    private $headerExtensions;
    private $transactions;
    private $blockExtensions;
    private $refBlockPrefix;

    public function __construct($response)
    {
        $responseObj = json_decode($response);

        $this->timestamp = new \DateTime($responseObj->timestamp);
        $this->producer = $responseObj->producer;
        $this->confirmed = $responseObj->confirmed;
        $this->previous = $responseObj->previous;
        $this->transactionMroot = $responseObj->transaction_mroot;
        $this->actionMroot = $responseObj->action_mroot;
        $this->scheduleVersion = $responseObj->schedule_version;
        $this->newProducers = $responseObj->new_producers;
        $this->headerExtensions = $responseObj->header_extensions;
        $this->producerSignature = $responseObj->producer_signature;
        $this->transactions = $responseObj->transactions;
        $this->blockExtensions = $responseObj->block_extensions;
        $this->refBlockPrefix = $responseObj->ref_block_prefix;
        $this->id = $responseObj->id;
        $this->blockNum = $responseObj->block_num;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function blockNum(): int
    {
        return $this->blockNum;
    }

    public function previous(): string
    {
        return $this->previous;
    }

    public function timestamp(): \DateTime
    {
        return $this->timestamp;
    }

    public function confirmed(): int
    {
        return $this->confirmed;
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

    public function headerExtensions(): array
    {
        return $this->headerExtensions;
    }

    public function transactions(): array
    {
        return $this->headerExtensions;
    }

    public function blockExtensions(): array
    {
        return $this->headerExtensions;
    }

    public function refBlockPrefix(): int
    {
        return $this->headerExtensions;
    }
}
