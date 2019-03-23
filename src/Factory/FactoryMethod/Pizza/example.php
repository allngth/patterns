<?php

use App\Factory\FactoryMethod\Pizza\ChicagoPizzaStore;
use App\Factory\FactoryMethod\Pizza\NYPizzaStore;

require_once '../../../../vendor/autoload.php';

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
print "Ethan ordered a " . $pizza->getName() . "\r\n\r\n";

$pizza = $chicagoStore->orderPizza('cheese');
print "Joel ordered a " . $pizza->getName() . "\r\n";