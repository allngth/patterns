<?php

use App\Factory\FactoryMethod\Logistics\TrainLogisticsCompany;

require_once '../../../../vendor/autoload.php';

$logisticsCompany = new TrainLogisticsCompany();
$logisticsCompany->transfer('Saint Petersburg', 'Moscow');
