<?php

use App\Factory\AbstractFactory\Pizza\Ingredient\MozzarellaCheese;
use App\Factory\AbstractFactory\Pizza\Ingredient\ReggianoCheese;
use App\Factory\AbstractFactory\Pizza\Store\ChicagoPizzaStore;
use App\Factory\AbstractFactory\Pizza\Store\NYPizzaStore;

class PizzaCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function testIsNYCheesePizzaHasReggianoCheese(UnitTester $I)
    {
        $store = new NYPizzaStore();
        $pizza = $store->orderPizza('cheese');

        $I->assertTrue(($pizza->getCheese() instanceof ReggianoCheese));
    }

    public function testIsChicagoCheesePizzaHasMozzarellaCheese(UnitTester $I)
    {
        $store = new ChicagoPizzaStore();
        $pizza = $store->orderPizza('cheese');

        $I->assertTrue(($pizza->getCheese() instanceof MozzarellaCheese));
    }
}
