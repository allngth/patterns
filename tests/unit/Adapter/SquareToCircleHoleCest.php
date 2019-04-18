<?php

use App\Adapter\SquareToCircleHole\RoundHole;
use App\Adapter\SquareToCircleHole\RoundItem;
use App\Adapter\SquareToCircleHole\RoundPeg;
use App\Adapter\SquareToCircleHole\SquarePeg;
use App\Adapter\SquareToCircleHole\SquarePegAdapter;

class SquareToCircleHoleCest
{
    public function testCanCreateRoundItemFromSquarePeg(UnitTester $I)
    {
        $squarePeg = new SquarePeg(10);
        $adapter = new SquarePegAdapter($squarePeg);

        $I->assertTrue($adapter instanceof RoundItem);
    }

    public function testRoundPegFits(UnitTester $I)
    {
        $hole = new RoundHole(5);
        $roundPeg = new RoundPeg(5);

        $I->assertTrue($hole->isFits($roundPeg));
    }

    public function testRoundPegNotFits(UnitTester $I)
    {
        $hole = new RoundHole(2);
        $roundPeg = new RoundPeg(100);

        $I->assertTrue(!$hole->isFits($roundPeg));
    }

    public function testSquarePegFits(UnitTester $I)
    {
        $hole = new RoundHole(10);
        $squarePeg = new SquarePeg(5);
        $adapter = new SquarePegAdapter($squarePeg);

        $I->assertTrue($hole->isFits($adapter));
    }

    public function testSquarePegNotFits(UnitTester $I)
    {
        $hole = new RoundHole(5);
        $squarePeg = new SquarePeg(100);
        $adapter = new SquarePegAdapter($squarePeg);

        $I->assertTrue(!$hole->isFits($adapter));
    }
}
