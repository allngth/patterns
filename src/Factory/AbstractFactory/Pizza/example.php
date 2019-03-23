<?php

use App\Factory\AbstractFactory\Pizza\Store\ChicagoPizzaStore;
use App\Factory\AbstractFactory\Pizza\Store\NYPizzaStore;

require_once '../../../../vendor/autoload.php';

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
print "Ethan ordered a " . $pizza->getName() . "\r\n\r\n";

$pizza = $chicagoStore->orderPizza('cheese');
print "Joel ordered a " . $pizza->getName() . "\r\n\r\n";

$pizza = $nyStore->orderPizza('clam');
print "Ethan ordered a " . $pizza->getName() . "\r\n\r\n";

$pizza = $chicagoStore->orderPizza('clam');
print "Joel ordered a " . $pizza->getName() . "\r\n\r\n";