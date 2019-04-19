<?php

namespace App\Decorator\ProtectData;

class FileDataSource implements DataSourceInterface
{
    protected $data;

    public function writeData($data)
    {
        return $this->data = $data;
    }

    public function readData()
    {
        return $this->data;
    }
}
