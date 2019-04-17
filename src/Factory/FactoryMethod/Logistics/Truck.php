<?php

namespace App\Factory\FactoryMethod\Logistics;

class Truck extends Transport
{
    public function getTransportName(): string
    {
        return 'truck';
    }
}
