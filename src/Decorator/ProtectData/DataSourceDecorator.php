<?php

namespace App\Decorator\ProtectData;

class DataSourceDecorator implements DataSourceInterface
{
    protected $wrappee;

    public function __construct(DataSourceInterface $source)
    {
        $this->wrappee = $source;
    }

    public function writeData($data)
    {
        return $this->wrappee->writeData($data);
    }

    public function readData()
    {
        return $this->wrappee->readData();
    }
}
