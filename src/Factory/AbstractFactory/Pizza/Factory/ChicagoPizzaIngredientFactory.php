<?php

namespace App\Factory\AbstractFactory\Pizza\Factory;

use App\Factory\AbstractFactory\Pizza\Ingredient\{
    BlackOlives,
    Cheese,
    Clams,
    Dough,
    EggPlant,
    FrozenClams,
    MozzarellaCheese,
    Pepperoni,
    PlumTomatoSauce,
    Sauce,
    SlicedPepperoni,
    Spinach,
    ThickCrustDough
};

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [new EggPlant(), new Spinach(), new BlackOlives()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}