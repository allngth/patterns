<?php

namespace App\Factory\FactoryMethod\Logistics;

class Train extends Transport
{
    public function getTransportName(): string
    {
        return 'train';
    }
}
