<?php

use App\Singleton\Singleton;

class SingletonCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function test(UnitTester $I)
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $I->assertInstanceOf(Singleton::class, $firstCall);
        $I->assertTrue($firstCall->getId() === $secondCall->getId());
    }
}
