<?php

namespace App\Factory\AbstractFactory\Pizza\Store;

use App\Factory\AbstractFactory\Pizza\Factory\NYPizzaIngredientFactory;
use App\Factory\AbstractFactory\Pizza\Pizza\{CheesePizza, ClamPizza, Pizza};

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        }

        return $pizza;
    }
}