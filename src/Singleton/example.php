<?php

use App\Singleton\Singleton;

require_once '../../vendor/autoload.php';

$object1 = Singleton::getInstance();
$object2 = Singleton::getInstance();