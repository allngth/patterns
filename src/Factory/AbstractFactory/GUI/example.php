<?php

use App\Factory\AbstractFactory\GUI\Application;
use App\Factory\AbstractFactory\GUI\Factory\MacFactory;

require_once '../../../../vendor/autoload.php';

$factory = new MacFactory();

$application = new Application($factory);
$application->createUI();

// ...
