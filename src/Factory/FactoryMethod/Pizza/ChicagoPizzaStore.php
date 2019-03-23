<?php

namespace App\Factory\FactoryMethod\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } // end more ...

        return $pizza;
    }
}