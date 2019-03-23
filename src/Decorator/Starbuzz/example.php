<?php

use App\Decorator\Starbuzz\{Espresso, HouseBlend, Mocha};

require_once '../../../vendor/autoload.php';

$beverage = new Espresso();

echo sprintf("%s $%g \r\n", $beverage->getDescription(), $beverage->cost());

$beverage2 = new HouseBlend();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);

echo sprintf("%s $%g \r\n", $beverage2->getDescription(), $beverage2->cost());