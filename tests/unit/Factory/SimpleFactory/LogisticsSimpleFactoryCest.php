<?php

use App\Factory\SimpleFactory\Logistics\LogisticsCompany;
use App\Factory\SimpleFactory\Logistics\TransportFactory;
use App\Factory\SimpleFactory\Logistics\Truck;

class LogisticsSimpleFactoryCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function testLogisticsCompanyTransport(UnitTester $I)
    {
        $factory = new TransportFactory();
        $logisticsCompany = new LogisticsCompany($factory);

        $transport = $logisticsCompany->transfer('Moscow', 'Noginsk', 'truck');

        $I->assertTrue($transport instanceof Truck);
    }
}
