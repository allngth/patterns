<?php

namespace App\Factory\FactoryMethod\Logistics;

class TrainLogisticsCompany extends LogisticsCompany
{
    protected function getTransport(): Transport
    {
        return new Train();
    }
}
