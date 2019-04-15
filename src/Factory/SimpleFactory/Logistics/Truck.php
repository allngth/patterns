<?php

namespace App\Factory\SimpleFactory\Logistics;

class Truck extends Transport
{
    /**
     * @return string
     */
    public function getTransportName(): string
    {
        return 'truck';
    }
}
