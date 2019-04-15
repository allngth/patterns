<?php

use App\Factory\SimpleFactory\Logistics\LogisticsCompany;
use App\Factory\SimpleFactory\Logistics\TransportFactory;

require_once '../../../../vendor/autoload.php';

$factory = new TransportFactory();

$logisticsCompany = new LogisticsCompany($factory);

$logisticsCompany->transfer('Moscow', 'Noginsk', 'truck');
