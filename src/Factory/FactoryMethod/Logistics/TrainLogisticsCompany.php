<?php

namespace App\Factory\FactoryMethod\Logistics;

class TrainLogisticsCompany extends LogisticsCompany
{
    public function getTransport(): Transport
    {
        return new Train();
    }
}
