<?php

namespace App\Factory\FactoryMethod\Logistics;

class Train extends Transport
{
    /**
     * @return string
     */
    public function getTransportName(): string
    {
        return 'train';
    }
}
