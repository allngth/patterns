<?php

namespace App\Factory\AbstractFactory\Pizza\Store;

use App\Factory\AbstractFactory\Pizza\Factory\ChicagoPizzaIngredientFactory;
use App\Factory\AbstractFactory\Pizza\Pizza\{CheesePizza, ClamPizza, Pizza};

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        }

        return $pizza;
    }
}
