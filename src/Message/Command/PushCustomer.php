<?php

declare(strict_types=1);

namespace Setono\SyliusMailchimpPlugin\Message\Command;

final class PushCustomer implements CommandInterface
{
    /** @var int */
    private $customerId;

    /** @var bool */
    private $pushEmailOnly;

    public function __construct(int $customerId, bool $pushEmailOnly = false)
    {
        $this->customerId = $customerId;
        $this->pushEmailOnly = $pushEmailOnly;
    }

    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    public function isPushEmailOnly(): bool
    {
        return $this->pushEmailOnly;
    }
}
