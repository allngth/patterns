<?php

namespace App\Factory\SimpleFactory\Pizza;

class PizzaStore
{
    private $pizzaFactory;

    public function __construct(SimplePizzaFactory $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->pizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}