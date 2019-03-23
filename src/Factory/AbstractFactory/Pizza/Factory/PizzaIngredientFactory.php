<?php

namespace App\Factory\AbstractFactory\Pizza\Factory;

use App\Factory\AbstractFactory\Pizza\Ingredient\{Cheese, Clams, Dough, Pepperoni, Sauce};

interface PizzaIngredientFactory
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    public function createVeggies(): array;
    public function createPepperoni(): Pepperoni;
    public function createClam(): Clams;
}