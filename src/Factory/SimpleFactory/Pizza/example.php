<?php

use App\Factory\SimpleFactory\Pizza\PizzaStore;
use App\Factory\SimpleFactory\Pizza\SimplePizzaFactory;

require_once '../../../../vendor/autoload.php';

$pizzaStore = new PizzaStore(new SimplePizzaFactory());

$pepperoniPizza = $pizzaStore->orderPizza('pepperoni');