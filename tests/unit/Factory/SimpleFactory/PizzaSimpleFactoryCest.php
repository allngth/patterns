<?php

use App\Factory\SimpleFactory\Pizza\PepperoniPizza;
use App\Factory\SimpleFactory\Pizza\PizzaStore;
use App\Factory\SimpleFactory\Pizza\SimplePizzaFactory;

class PizzaSimpleFactoryCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function testPizzaStorePizza(UnitTester $I)
    {
        $pizzaStore = new PizzaStore(new SimplePizzaFactory());
        $pizza = $pizzaStore->orderPizza('pepperoni');

        $I->assertTrue($pizza instanceof PepperoniPizza);
    }
}
