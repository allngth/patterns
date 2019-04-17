<?php

namespace App\Factory\FactoryMethod\Logistics;

abstract class LogisticsCompany
{
    public function transfer(string $from, string $to)
    {
        $this
            ->getTransport()
            ->deliver($from, $to)
        ;
    }

    abstract public function getTransport(): Transport;
}
