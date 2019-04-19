<?php

use App\Facade\VideoConverter\VideoConverter;

class VideoConverterCest
{
    public function testMP4ToOGGConversion(UnitTester $I)
    {
        $file = 'GoF.mp4';
        $format = '.ogg';

        $converter = new VideoConverter();
        $file = $converter->convert($file, $format);

        $I->assertTrue(mb_substr($file, -4) === $format);
    }
}
