<?php

use App\Factory\FactoryMethod\Pizza\ChicagoPizzaStore;
use App\Factory\FactoryMethod\Pizza\ChicagoStyleCheesePizza;
use App\Factory\FactoryMethod\Pizza\NYPizzaStore;
use App\Factory\FactoryMethod\Pizza\NYStyleCheesePizza;

class PizzaFactoryMethodCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function testNyStore(UnitTester $I)
    {
        $nyStore = new NYPizzaStore();
        $pizza = $nyStore->orderPizza('cheese');

        $I->assertTrue($pizza instanceof NYStyleCheesePizza);
    }

    public function testChicagoStore(UnitTester $I)
    {
        $nyStore = new ChicagoPizzaStore();
        $pizza = $nyStore->orderPizza('cheese');

        $I->assertTrue($pizza instanceof ChicagoStyleCheesePizza);
    }
}
