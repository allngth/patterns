<?php

namespace App\Factory\AbstractFactory\Pizza\Factory;

use App\Factory\AbstractFactory\Pizza\Ingredient\{Cheese,
    Clams,
    Dough,
    FreshClams,
    Garlic,
    MarinaraSauce,
    Mushroom,
    Onion,
    Pepperoni,
    RedPepper,
    ReggianoCheese,
    Sauce,
    SlicedPepperoni,
    ThinCrustDough};

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FreshClams();
    }
}