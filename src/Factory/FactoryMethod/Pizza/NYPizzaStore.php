<?php

namespace App\Factory\FactoryMethod\Pizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } // end more ...

        return $pizza;
    }
}