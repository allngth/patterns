<?php

namespace App\Factory\FactoryMethod\Logistics;

class TruckLogisticsCompany extends LogisticsCompany
{
    public function getTransport(): Transport
    {
        return new Truck();
    }
}
