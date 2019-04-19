<?php

namespace App\Decorator\ProtectData;

class CompressionDecorator extends DataSourceDecorator
{
    const ADDITIONAL_STRING = 'Compressed: ';

    public function writeData($data)
    {
        $data = static::ADDITIONAL_STRING . $data;

        return parent::writeData($data);
    }

    public function readData()
    {
        $data = parent::readData();

        $data = str_replace(static::ADDITIONAL_STRING, '', $data);

        return $data;
    }
}
