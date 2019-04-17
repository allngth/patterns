<?php

namespace App\Factory\FactoryMethod\Logistics;

abstract class Transport
{
    public function deliver(string $from, string $to)
    {
        print_r("Deliver from \"$from\" to \"$to\" by {$this->getTransportName()}.\n");
    }

    abstract public function getTransportName(): string;
}
