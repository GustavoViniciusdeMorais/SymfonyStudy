<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class RandomNumber
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getNumber($min = 1, $max = 100)
    {
        return rand($min, $max);
    }
}
