<?php


use App\Factory\FactoryMethod\Logistics\Train;
use App\Factory\FactoryMethod\Logistics\TrainLogisticsCompany;
use App\Factory\FactoryMethod\Logistics\Truck;
use App\Factory\FactoryMethod\Logistics\TruckLogisticsCompany;

class LogisticsFactoryMethodCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function testCanDeliverByTrain(UnitTester $I)
    {
        $logisticsCompany = new TrainLogisticsCompany();
        $transport = $logisticsCompany->getTransport();

        $I->assertTrue($transport instanceof Train);
    }

    public function testCanDeliverByTruck(UnitTester $I)
    {
        $logisticsCompany = new TruckLogisticsCompany();
        $transport = $logisticsCompany->getTransport();

        $I->assertTrue($transport instanceof Truck);
    }
}
