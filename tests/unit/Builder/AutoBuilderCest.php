<?php

use App\Builder\AutoBuilder\Car;
use App\Builder\AutoBuilder\CarBuilder;
use App\Builder\AutoBuilder\CarManualBuilder;
use App\Builder\AutoBuilder\Director;
use App\Builder\AutoBuilder\Manual;

class AutoBuilderCest
{
    public function testCanMakeCar(UnitTester $I)
    {
        $director = new Director();
        $builder = new CarBuilder();

        $director->constructSportCar($builder);

        $car = $builder->getResult();

        $I->assertTrue($car instanceof Car);
    }

    public function testCanMakeCarManual(UnitTester $I)
    {
        $director = new Director();
        $builder = new CarManualBuilder();

        $director->constructSportCar($builder);

        $carManual = $builder->getResult();

        $I->assertTrue($carManual instanceof Manual);
    }
}
