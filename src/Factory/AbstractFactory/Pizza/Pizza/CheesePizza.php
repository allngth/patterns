<?php

namespace App\Factory\AbstractFactory\Pizza\Pizza;

use App\Factory\AbstractFactory\Pizza\Factory\PizzaIngredientFactory;

class CheesePizza extends Pizza
{
    private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        print 'Preparing ' . $this->name . "\r\n";

        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}