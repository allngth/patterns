<?php

use App\Decorator\Starbuzz\Espresso;
use App\Decorator\Starbuzz\HouseBlend;
use App\Decorator\Starbuzz\Mocha;

class StartbuzzCest
{
    public function testBeverage(UnitTester $I)
    {
        $beverage = new Espresso();

        $I->assertTrue($beverage->cost() === 1.99);
    }

    public function testHouseBlendWithDoubleMocha(UnitTester $I)
    {
        $beverage = new HouseBlend();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);

        $I->assertTrue($beverage->cost() === 1.29);
    }
}
