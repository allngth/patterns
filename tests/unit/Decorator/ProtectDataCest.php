<?php

use App\Decorator\ProtectData\CompressionDecorator;
use App\Decorator\ProtectData\EncyptionDecorator;
use App\Decorator\ProtectData\FileDataSource;

class ProtectDataCest
{
    public function testSuperSecureDataProtection(UnitTester $I)
    {
        $data = 'Hello world!';
        $file =new FileDataSource();

        $file = new CompressionDecorator($file);
        $file = new EncyptionDecorator($file);

        $I->assertFalse($data === $file->writeData($data));
        $I->assertTrue($data === $file->readData());
    }
}
