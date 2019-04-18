<?php

use App\Bridge\Remote\Remote;
use App\Bridge\Remote\Tv;

class RemoteBridgeCest
{
    public function testTv(UnitTester $I)
    {
        $tv = new Tv();
        $remote = new Remote($tv);

        $I->assertFalse($tv->isEnabled());

        $remote->togglePower();
        $I->assertTrue($tv->isEnabled());

        $remote->togglePower();
        $I->assertFalse($tv->isEnabled());

        $remote->togglePower();

        // etc...
    }
}
