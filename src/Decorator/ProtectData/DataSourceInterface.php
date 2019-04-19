<?php

namespace App\Decorator\ProtectData;

interface DataSourceInterface
{
    public function writeData($data);

    public function readData();
}
